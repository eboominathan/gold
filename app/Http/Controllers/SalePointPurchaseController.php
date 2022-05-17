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
    public function purchase_tax_invoice()
    {
    	$title = 'Purchase Tax Invoice';
        return view('purchase_tax_invoice',compact('title'));
    }
    public function order_invoice_daily()
    {
    	$title = 'Order Invoice Daily';
        return view('order_invoice_daily',compact('title'));
    }
    public function order_invoice_monthly()
    {
    	$title = 'Order Invoice Monthly';
        return view('order_invoice_monthly',compact('title'));
    }
    public function tax_invoice_daily()
    {
    	$title = 'Tax Invoice Daily';
        return view('tax_invoice_daily',compact('title'));
    }
    public function tax_invoice_monthly()
    {
    	$title = 'Tax Invoice Monthly';
        return view('tax_invoice_monthly',compact('title'));
    }
}
