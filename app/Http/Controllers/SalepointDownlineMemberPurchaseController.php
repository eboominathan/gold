<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalepointDownlineMemberPurchaseController extends Controller
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
    	$title = 'SalePoint Downline Member Purchase';
        return view('salepoint_downline_member_purchase',compact('title'));
    }
    public function viewDownlineMemberPurchase()
    {
    	$title = 'View SalePoint Downline Member Purchase';
        return view('view_salepoint_downline_member_purchase',compact('title'));
    }public function downlineMemberPurchase()
    {
    	$title = '  Downline Member Purchase';
        return view('downline_member_purchase',compact('title'));
    }
	public function viewPurchaseDetails()
    {
    	$title = 'View SalePoint Downline Member Purchase';
        return view('view_purchase_details',compact('title'));
    }
}
