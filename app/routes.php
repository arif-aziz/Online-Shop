<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Front Page */
Route::get('/', 'FrontController@index');
Route::get('dashboard', 'FrontController@dashboard')->before('auth');
Route::get('admin/dashboard', 'FrontController@admindashboard')->before('auth');
Route::get('tentang', 'FrontController@tentang');
Route::get('kontak', 'FrontController@kontak');
Route::get('bantuan', 'FrontController@bantuan');

/* Cari */
Route::post('/searchresult', 'SearchController@index');

/* Login */
Route::get('login', 'LoginController@index')->before('guest');
Route::get('admin', 'LoginController@admin')->before('guest');
Route::post('login', 'LoginController@login');
Route::post('admin/login', 'LoginController@adminlogin');
Route::get('logout', 'LoginController@logout')->before('auth');
Route::get('admin/logout', 'LoginController@adminlogout')->before('auth');

/* Registration */
Route::get('register', 'RegisterController@index');
Route::post('register', 'RegisterController@postRegister');

/* Cart */
Route::get('keranjang', 'CartController@index');
Route::post('keranjang', 'CartController@postCart');
Route::post('keranjang/hapus/{identifier}', 'CartController@deleteCart');
Route::post('keranjang/edit/{identifier}', 'CartController@editCart');
//Route::get('checkout', 'CartController@checkout')->before('auth');
Route::post('checkout', 'CartController@checkout')->before('auth');

/* Transaction */
Route::get('transaksi', 'TransactionController@index');

/* Category */
Route::get('c/{nama}/{offset}', 'CategoryController@showKategori');

/* Listing */
Route::get('p/{permalink}', 'ListingController@index');
//Route::get('listing/{page}', 'ListingController@pageListing');
Route::get('listing', 'ListingController@viewListing');
Route::get('listing/add', 'ListingController@addListing')->before('auth');
Route::post('listing/add', 'ListingController@postListing');
Route::get('p/edit/{id}', 'ListingController@editListing')->before('auth');
Route::get('p/hapus/{id}', 'ListingController@deleteListing')->before('auth');
Route::get('hasilcari', 'ListingController@showResult');
Route::get('listing/ceklink/{permalink}', 'ListingController@cekPermalink');

/* User */
Route::get('user/{id}', 'UserController@index');
Route::get('user/edit/{id}', 'UserController@editUser')->before('auth');
Route::get('balance', 'UserController@balance')->before('auth'); //saldo
Route::get('withdraw', 'UserController@withdraw')->before('auth'); //transaksi penarikan saldo
Route::get('deposit', 'UserController@deposit')->before('auth'); //transaksi pengisian saldo

/* Invoice */
Route::get('invoice', 'InvoiceController@index'); //tagihan:surat tagihan/kuitansi, biasanya keluar setelah pembayaran lunas
Route::get('invoice/{id}', 'InvoiceController@showInvoice')->before('auth');

/* Area */
Route::controller('area', 'AreaController');

/* Store */
Route::get('store/add', 'StoreController@addStore')->before('auth');
Route::get('{permalink}/edit/{id}', 'StoreController@editStore')->before('auth');
Route::get('{permalink}', 'StoreController@index');
Route::get('{permalink}/testimoni', 'StoreController@showTestimoni');
Route::get('{permalink}/tambah-testimoni', 'StoreController@addTestimoni')->before('auth');

