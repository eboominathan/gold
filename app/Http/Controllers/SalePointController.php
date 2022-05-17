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
     public function address()
    {
        $title = 'SalePoint Members address';
        return view('sale_point_address',compact('title'));
    }
    public function viewMemberInfo()
    {
        $title = 'View Member Information';
        return view('view_sale_point_member',compact('title'));
    }
}
