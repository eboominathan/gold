<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalePointController extends Controller
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
    	$title = 'SalePoint Members';
        return view('sale_point_members',compact('title'));
    }
}
