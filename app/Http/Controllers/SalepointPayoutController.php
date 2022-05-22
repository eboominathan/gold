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
    public function salepointPayoutList()
    {
    	$title = 'SalePoint Payout List';
        return view('salepoint_payout_list',compact('title'));
    }
    public function productPurchaseMonthly()
    {
    	$title = 'SalePoint Payout List';
        return view('product_purchase_monthly',compact('title'));
    }
     public function memberPayout()
    {
    	$title = 'Members Payout';
        return view('members_payout',compact('title'));
    } 
    public function membersPayoutList()
    {
    	$title = 'Members Payout List';
        return view('members_payout_list',compact('title'));
    }

}
