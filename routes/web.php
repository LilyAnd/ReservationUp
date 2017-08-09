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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'AdminController@index');
Route::get('admin/merchant', 'MerchantController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset', 'Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');


Route::resource('/item','ItemController');
Route::resource('/home','HomeController');
 Route::resource('/merchant','MerchantController');


Route::get('/daftar','CustreservController@daftar');

Route::get('/daftar/dashboard/{id_merchant}','CustreservController@index');

Route::get('/daftar/reservasi/{id_merchant}','CustreservController@reservasi');

Route::post('daftar/save','CustreservController@postReservasi');

//MERCHANT RESERVASI
Route::get('admin/mshow','MerchantreservController@show');

Route::get('/mshow/{id_reservation}','MerchantreservController@detail');

Route::get('/reject/{id_reservation}','MerchantreservController@reject');

Route::post('/approve','MerchantreservController@approve');

//CUSTOMER RESERVASI

Route::get('/daftar','CustreservController@daftar');

Route::get('/daftar/dashboard/{id_merchant}','CustreservController@index');

Route::get('/daftar/reservasi/{id_merchant}','CustreservController@reservasi');

Route::post('daftar/save','CustreservController@postReservasi');

Route::get('show','CustreservController@show');