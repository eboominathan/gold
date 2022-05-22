<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalepointProductSalesController extends Controller
{
          /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
   
    public function product_sales_daily()
    {
    	$title = 'SalePoint Product Sales Daily';
        return view('product_sales_daily',compact('title'));
    }
 
}
