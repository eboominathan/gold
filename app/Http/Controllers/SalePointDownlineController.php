<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalePointDownlineController extends Controller
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
    	$title = 'SalePoint Downline Members';
        return view('sale_point_downline_members',compact('title'));
    }
    public function viewMemberInfo()
    {
        $title = 'View Downline Member Information';
        return view('view_sale_point_member',compact('title'));
    }
}
