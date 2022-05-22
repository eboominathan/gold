<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalepointProductStocksController extends Controller
{
               /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
   
    public function product_stocks_daily()
    {
    	$title = 'SalePoint Product Stocks Daily';
        return view('product_stocks_daily',compact('title'));
    }    
    public function product_stocks_monthly()
    {
    	$title = 'SalePoint Product Stocks Monthly';
        return view('product_stocks_monthly',compact('title'));
    }
}
