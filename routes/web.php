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
Route::get('/members', 'MemberController@index');
Route::get('/salepoint-downline-members', 'MemberController@index');
Route::get('/downline-members', 'MemberController@index');
