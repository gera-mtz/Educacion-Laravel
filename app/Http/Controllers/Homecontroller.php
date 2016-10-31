<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Redirect;
use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use Session;

class HomeController extends Controller
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
    public function __construct()
    {
        //$this->middleware('auth');
        //return view('interno');
    }
    public function showInicio()
    {
        return view('login');
    }
    public function showInterno()
    {
        
    }
    
}
