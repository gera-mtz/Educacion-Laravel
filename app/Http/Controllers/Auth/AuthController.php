<?php
//authcontroller.php
//
//Este controlador se encuentra por defecto 
namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;

class AuthController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Registration & Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users, as well as the
  | authentication of existing users. By default, this controller uses
  | a simple trait to add these behaviors. Why don't you explore it?
  |
  */

  use AuthenticatesAndRegistersUsers, ThrottlesLogins;

  /**
   * Create a new authentication controller instance.
   *
   * @return void
   */
  public function __construct(){
    $this->middleware('guest', ['except' => 'getLogout']);
  }

  /**
   * Get a validator for an incoming registration request.
   *
   * @param  array  $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  protected function validator(array $data){
    return Validator::make($data, [
      'name' => 'required|max:255',
      'email' => 'required|email|max:255|unique:users',
      'password' => 'required|confirmed|min:6',
    ]);
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return User
   */
  protected function create(array $data){
    return User::create([
      'username' => $data['username'],
      'password' => bcrypt($data['password']),
    ]);
  }

  public function getLogin(){
    return View::make('auth.login');
  }
  public function postLogin(){
    $rules = array(
    'username'    => 'required', // make sure the email is an actual email
    'password' => 'required|min:4' // password can only be alphanumeric and has to be greater than 3 characters
    );

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {
      return Redirect::to('login')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
    } 
    else {
      // create our user data for the authentication
      $userdata = array(
      'username'     => Input::get('username'),
      'password'  => Input::get('password')
      );

      // attempt to do the login
      if (Auth::attempt($userdata)) {
        // validation successful!2
        // redirect them to the secure section or whatever
        // return Redirect::to('secure');
        // for now we'll just echo success (even though echoing in a controller is bad)
        echo 'SUCCESS!';
      } else {        
        // validation not successful, send back to form 
        return Redirect::to('login');
      }
    }
  }
  public function getLogout(){
    Auth::logout(); // log the user out of our application
    return Redirect::to('login'); // redirect the user to the login screen
  }

  //!!!!!!!!!!!!!!!!!!!Funciones agregadas!!!!!!!!!!!!!!!!!!!!!!!!!!

  //funcion de redireccion al inicio de sesion de la red social y aceptar el permiso del usuario de la aplicacion
  //paso el parametro de la red social al cual iniciara sesión
  public function redirectToProvider($provider=null)
  {
    return Socialite::driver($provider)->redirect(); //me regresa la URL de redireccion
  }

  //funcion para recibir el callback URL con los tokens para el inicio de sesion. Se guarda una variable el token para obtener
  //datos del usuario como su correo. Tambien se pasa como parametro la red social del usuario que inicio sesion
  public function handleProviderCallback()
  {
    //$user = Socialite::driver($provider)->user(); //se guarda en una variable el regreso del token
    return redirect('welcome'); //me dirige a la redirección welcome
  }
}
