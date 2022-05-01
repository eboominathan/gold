<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$title = 'Generate Pin';
        return view('generate_pin',compact('title'));
    }
}
