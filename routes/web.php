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

/* Front End*/ 
Route::group(['middleware' => ['web']], function(){

	Route::get('/', 'HomeController@index');
	Route::get('/services', 'HomeController@services');
	Route::get('/cuciac', 'HomeController@cuciac');
	Route::get('/reparasiac', 'HomeController@servisac');
	Route::get('/bongkarpasangac', 'HomeController@bongkarac');

	//book service
	Route::post('/bookc', 'HomeController@storecuciac')->name('bc');
	Route::post('/books', 'HomeController@storeservisac')->name('bs');
	Route::post('/bookb', 'HomeController@storebongkarac')->name('bb');	


	/* Back End */ 
	Route::group(['prefix' => 'nimda'], function(){
		Route::get('/home', 'Admin\HomeController@index')->name('home');
		Route::get('/', 'Auth\LoginController@showLoginForm');
		Route::get('/logout','Auth\LoginController@logout');

	// report
	  	Route::get('/report', 'Admin\HomeController@report_view');
	  	Route::post('/report_pdf', 'Admin\HomeController@report_print');
	  	

	// customer
		Route::get('customer', 'Admin\CustomerController@index');
		Route::get('customer/index', 'Admin\CustomerController@index');
		Route::get('customer/create', 'Admin\CustomerController@create');
		Route::post('customer/create', 'Admin\CustomerController@store')->name('store.cus');
		Route::get('customer/edit/{id}', 'Admin\CustomerController@edit');
		Route::post('customer/update/{id}', 'Admin\CustomerController@update');
		Route::get('customer/delete/{id}', 'Admin\CustomerController@destroy');

	// admin
		Route::get('admin', 'Admin\AdminController@index');
		Route::get('admin/index', 'Admin\AdminController@index');
		Route::get('admin/create', 'Admin\AdminController@create');
		Route::post('admin/create', 'Admin\AdminController@store')->name('store.adm');
		Route::get('admin/edit/{id}', 'Admin\AdminController@edit');
		Route::post('admin/update/{id}', 'Admin\AdminController@update');
		Route::get('admin/delete/{id}', 'Admin\AdminController@destroy');

		// Orders
		Route::get('orders','Admin\OrdersController@index');
		Route::get('orders/delete/{id}','Admin\OrdersController@destroy');
		Route::post('orders/change_status/{id}','Admin\OrdersController@update_status');

		//keluhan
		Route::get('keluhan', 'Admin\KeluhanController@index');
		Route::post('keluhan/update/{id}', 'Admin\KeluhanController@update');
		Route::get('keluhan/delete/{id}', 'Admin\KeluhanController@destroy');

		//paket harga
		Route::get('paket', 'Admin\PaketController@index');
		Route::post('paket/create', 'Admin\PaketController@store')->name('store.paket');
		Route::post('paket/update/{id}', 'Admin\PaketController@update');
		Route::get('paket/delete/{id}', 'Admin\PaketController@destroy');
	});

	/* customer section */ 
	Route::group(['prefix' => 'cs'], function(){
		Route::get('/register', 'User\Auth\RegisterController@showRegistrationForm');
		Route::post('/register', 'User\Auth\RegisterController@create')->name('cs.regist');
		Route::get('/login', 'User\Auth\LoginController@showLoginForm');
		Route::post('login', 'User\Auth\LoginController@login')->name('cs.login');
		Route::get('/logout','User\Auth\LoginController@logout');

		Route::get('/profile/{id}','User\UserController@profile');
		Route::get('/transaction','User\UserController@vtransaction');
		Route::post('/update_profile/{id}', 'User\UserController@update_profile');
		Route::post('/send_bukti/{id}', 'User\UserController@send_bukti');

		//keluhan
		Route::get('keluhan', 'User\UserController@vkeluhan');
		Route::post('keluhan/create', 'User\UserController@create_keluhan')->name('store.kel');
		Route::post('keluhan/update/{id}', 'User\UserController@update_keluhan');
		// Route::get('keluhan/delete/{id}', 'User\UserController@delete_keluhan');

		Route::get('cetak_kuitansi/{id}', 'User\UserController@cetak_kuitansi');
	});
	Auth::routes();
});