<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/generate-pin', 'PinController@index');
Route::get('/application-form', 'ApplicationController@index');
Route::get('/sale-point-members', 'SalePointController@index');
Route::get('/sale-point-address', 'SalePointController@address');
Route::get('/view-member-info', 'SalePointController@viewMemberInfo');
Route::get('/members', 'MemberController@index');
Route::get('/members/address', 'MemberController@address');
Route::get('/salepoint-downline-members', 'SalePointDownlineController@index');
Route::get('/view-downline-members', 'SalePointDownlineController@viewDownlineMember');
Route::get('/downline-members', 'MemberController@index');
Route::get('/salepoint-purchase-order', 'SalePointPurchaseController@index');
Route::get('/purchse-order-invoice', 'SalePointPurchaseController@purchase_order_invoice');
Route::get('/purchse-tax-invoice', 'SalePointPurchaseController@purchase_tax_invoice');
Route::get('/order-invoice-daily', 'SalePointPurchaseController@order_invoice_daily');
Route::get('/order-invoice-monthly', 'SalePointPurchaseController@order_invoice_monthly');
Route::get('/tax-invoice-daily', 'SalePointPurchaseController@tax_invoice_daily');
Route::get('/tax-invoice-monthly', 'SalePointPurchaseController@tax_invoice_monthly');
Route::get('/product-sales-daily', 'SalepointProductSalesController@product_sales_daily');
Route::get('/product-sales-monthly', 'SalepointProductSalesController@product_sales_monthly');
Route::get('/downline-members-sale-details', 'SalepointProductSalesController@downline_members_sale_details');
Route::get('/purchase-sale-stock-list-daily', 'SalepointPurchaseSaleStocksController@purchase_stocks_daily');
Route::get('/purchase-sale-stock-list-monthly', 'SalepointPurchaseSaleStocksController@purchase_stocks_monthly');
Route::get('/purchase-sale-stock-list-daily-view', 'SalepointPurchaseSaleStocksController@purchase_stocks_daily_view');
Route::get('/product-stock-list-daily', 'SalepointProductStocksController@product_stocks_daily');
Route::get('/product-stock-list-monthly', 'SalepointProductStocksController@product_stocks_monthly');

Route::get('/salepoint-downline-member-purchase', 'SalepointDownlineMemberPurchaseController@index');
Route::get('/view-downline-members-purchase', 'SalepointDownlineMemberPurchaseController@viewDownlineMemberPurchase');
Route::get('/view-purchase-details', 'SalepointDownlineMemberPurchaseController@viewPurchaseDetails');
Route::get('/downline-members-purchase', 'SalepointDownlineMemberPurchaseController@downlineMemberPurchase');
Route::get('/salepoint-payout', 'SalepointPayoutController@index');





/* Products */
Route::resource('products', ProductController::class);
