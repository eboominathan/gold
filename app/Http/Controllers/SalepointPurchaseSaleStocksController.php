<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalepointPurchaseSaleStocksController extends Controller
{
           /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
   
    public function purchase_stocks_daily()
    {
    	$title = 'SalePoint Purchase Sale Stocks Daily';
        return view('purchase_stocks_daily',compact('title'));
    }
    public function purchase_stocks_daily_view()
    {
    	$title = 'SalePoint Purchase Sale Stocks Daily';
        return view('purchase_stocks_daily_view',compact('title'));
    }
    public function purchase_stocks_monthly()
    {
    	$title = 'SalePoint Purchase Sale Stocks Monthly';
        return view('purchase_stocks_monthly',compact('title'));
    }
}
