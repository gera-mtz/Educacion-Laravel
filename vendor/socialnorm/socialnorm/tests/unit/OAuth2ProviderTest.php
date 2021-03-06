<?php

use Mockery as M;
use SocialNorm\OAuthManager;
use SocialNorm\Request;
use SocialNorm\Providers\OAuth2Provider;

use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Client as HttpClient;

class OAuth2ProviderTest extends TestCase
{
    private function getStubbedHttpClient($fixtures = [])
    {
        $mock = new MockHandler($this->createResponses($fixtures));
        $handler = HandlerStack::create($mock);
        return new HttpClient(['handler' => $handler]);
    }

    private function createResponses($fixtures)
    {
        $responses = [];
        foreach ($fixtures as $fixture) {
            $response = require $fixture;
            $responses[] = new Response($response['status'], $response['headers'], $response['body']);
        }

        return $responses;
    }

    /** @test */
    public function it_can_retrieve_a_normalized_user()
    {
        $client = $this->getStubbedHttpClient([
            __DIR__ . '/../_fixtures/oauth2_accesstoken_response.php',
            __DIR__ . '/../_fixtures/oauth2_user_response.php',
        ]);

        $provider = new GenericProvider([
            'client_id' => 'abcdefgh',
            'client_secret' => '12345678',
            'redirect_uri' => 'http://example.com/login',
        ], $client, new Request(['code' => 'abc123']));

        $user = $provider->getUser();

        $this->assertEquals('4323180', $user->id);
        $this->assertEquals('adamwathan', $user->nickname);
        $this->assertEquals('Adam Wathan', $user->full_name);
        $this->assertEquals('adam@example.com', $user->email);
        $this->assertEquals('https://avatars.example.com/4323180', $user->avatar);
        $this->assertEquals('abcdefgh12345678', $user->access_token);
    }

    /**
     * @test
     * @expectedException SocialNorm\Exceptions\ApplicationRejectedException
     */
    public function it_fails_to_retrieve_a_user_when_the_authorization_code_is_omitted()
    {
        $client = $this->getStubbedHttpClient([
            __DIR__ . '/../_fixtures/oauth2_accesstoken_response.php',
            __DIR__ . '/../_fixtures/oauth2_user_response.php',
        ]);

        $provider = new GenericProvider([
            'client_id' => 'abcdefgh',
            'client_secret' => '12345678',
            'redirect_uri' => 'http://example.com/login',
        ], $client, new Request([]));

        $user = $provider->getUser();
    }
}

class GenericProvider extends OAuth2Provider
{
    protected $scope = [ 'email' ];

    protected function getAuthorizeUrl()
    {
        return 'http://example.com/authorize';
    }

    protected function getAccessTokenBaseUrl()
    {
        return 'http://example.com/access-token';
    }

    protected function getUserDataUrl()
    {
        return 'http://api.example.com/user-details';
    }

    protected function parseTokenResponse($response)
    {
        return $this->parseJsonTokenResponse($response);
    }

    protected function parseUserDataResponse($response)
    {
        return json_decode($response, true);
    }

    protected function userId()
    {
        return $this->getProviderUserData('id');
    }

    protected function nickname()
    {
        return $this->getProviderUserData('login');
    }

    protected function fullName()
    {
        return $this->getProviderUserData('name');
    }

    protected function email()
    {
        return $this->getProviderUserData('email');
    }

    protected function avatar()
    {
        return $this->getProviderUserData('avatar_url');
    }
}
