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
    }public function product_sales_monthly()
    {
        $title = 'SalePoint Product Sales Monthly';
        return view('product_sales_monthly',compact('title'));
    }
    public function downline_members_sale_details()
    {
        $title = 'Downline Members Product Sales Details';
        return view('downline_members_sale_details',compact('title'));
    }
}
