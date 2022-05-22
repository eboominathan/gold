<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalepointPayoutController extends Controller
{
              /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
   
    public function index()
    {
    	$title = 'SalePoint Payout';
        return view('salepoint_payout',compact('title'));
    }
}
