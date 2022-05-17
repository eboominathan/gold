<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalePointPurchaseController extends Controller
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
    	$title = 'SalePoint Purchasing Order';
        return view('sale_point_purchase',compact('title'));
    }
	public function purchase_order_invoice()
    {
    	$title = 'Purchase Order Invoice';
        return view('purchase_order_invoice',compact('title'));
    }
}
