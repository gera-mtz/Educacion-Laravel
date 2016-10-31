<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Redirect;
use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use Session;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function getLogin()
    {
        return view('login');
    }
   

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']])) {
            return Redirect::to('welcome');
        }
        Session::flash('message-error', 'Usuario o Password incorrectos, vuelve a intentarlo');
        return view('login');
        //return $request->usuario;
    }


    
    public function getLogout()
{
    Auth::logout(); // log the user out of our application
    return Redirect::to('login'); // redirect the user to the login screen
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
