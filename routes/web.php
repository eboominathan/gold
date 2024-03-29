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
Route::post('/authenticate','Auth\LoginController@authenticate');

Route::middleware(['auth'])->group(function() {

Route::get('/logout', 'Auth\LoginController@logout'); 
Route::resource('/users', 'UserController'); 
Route::resource('/sale-point-master', 'SalePointMasterController'); 
Route::get('/sale-point-master/list', 'SalePointMasterController@show'); 
Route::get('/sale-point-master/edit/{id}', 'SalePointMasterController@edit'); 
Route::get('/sale-point-master/delete/{id}', 'SalePointMasterController@destroy'); 



Route::get('/sale-point-members', 'SalePointController@index');
Route::get('/sale-point-address', 'SalePointController@address');
Route::get('/view-member-info', 'SalePointController@viewMemberInfo');
Route::get('/sale-point-member/create', 'SalePointController@add'); 
Route::post('/sale-point-member/store-salepoint-member', 'SalePointController@storeSalepointMember'); 
Route::post('/sale-point-member-list', 'SalePointController@list'); 



Route::get('/members', 'MemberController@index');
Route::get('/members/address', 'MemberController@address');
Route::get('/member/create', 'MemberController@add'); 
Route::post('/member/store-member', 'MemberController@storeMember'); 
Route::post('/member-list', 'MemberController@list'); 





Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/get-all-users', 'PinController@getAllUsers');
Route::get('/application-form', 'ApplicationController@index');


Route::get('/generate-pin', 'PinController@index');
Route::post('/create-pin', 'PinController@storePin');
Route::post('/pin-number-list', 'PinController@list');






Route::get('/salepoint-downline-members', 'SalePointDownlineController@index');
Route::get('/view-downline-members', 'SalePointDownlineController@viewDownlineMember');
Route::get('/downline-members', 'MemberController@index');
Route::get('/salepoint-purchase-order', 'SalePointPurchaseController@index');
Route::get('/purchase-order-invoice', 'SalePointPurchaseController@purchase_order_invoice');
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
Route::get('/purchase-sale-stock-list-monthly-view', 'SalepointPurchaseSaleStocksController@purchase_stocks_monthly_view');
Route::get('/product-stock-list-daily', 'SalepointProductStocksController@product_stocks_daily');
Route::get('/product-stock-list-monthly', 'SalepointProductStocksController@product_stocks_monthly');

Route::get('/salepoint-downline-member-purchase', 'SalepointDownlineMemberPurchaseController@index');
Route::get('/view-downline-members-purchase', 'SalepointDownlineMemberPurchaseController@viewDownlineMemberPurchase');
Route::get('/view-purchase-details', 'SalepointDownlineMemberPurchaseController@viewPurchaseDetails');
Route::get('/downline-members-purchase', 'SalepointDownlineMemberPurchaseController@downlineMemberPurchase');
Route::get('/salepoint-payout', 'SalepointPayoutController@index');
Route::get('/salepoint-payout-list', 'SalepointPayoutController@salepointPayoutList');
Route::get('/product-purchase-monthly-statement', 'SalepointPayoutController@productPurchaseMonthly');
Route::get('/members-payout', 'SalepointPayoutController@memberPayout');
Route::get('/members-payout-list', 'SalepointPayoutController@membersPayoutList');
Route::get('/settings', 'SettingsController@index');
});





/* Products */
Route::resource('products', ProductController::class);

Route::get('migrate', function () {
    \Artisan::call('migrate:fresh');
    \Artisan::call('db:seed');
    dd("db updated");

});