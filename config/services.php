<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    //En modificacion
    'facebook' => [
        'client_id' => '1088303367955872',
        'client_secret' => 'c130016173a3206b8ad0ba3de03ae865',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

    'google' => [
        'client_id' => '467752396907-386c0tkalujkce3m41j9808tef4oa4jj.apps.googleusercontent.com',
        'client_secret' => 'ZfyVBINQ2xsfNmbuUPLN4ouv',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

    'twitter' => [
        'client_id' => 'xi7xY4A9rbfyPbH3VYqfnPZks',
        'client_secret' => 'jksynXcKCWbMCJEGnmqjKDjWpkFlDSRW7kot2INA3QexmHWaI8',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],
];
