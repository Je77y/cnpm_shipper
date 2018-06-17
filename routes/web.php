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
Route::group(['namespace' => 'Fontend'], function() {
	
	Route::get('/', [
		'as' => 'index',
		'uses' => 'HomeController@index'
	]);

	Route::get('/about', [
		'as' => 'about',
		'uses' => 'HomeController@about'
	]);

	Route::get('/help_shipper', [
		'as' => 'help_shipper',
		'uses' => 'HomeController@helpShipper'
	]);

	Route::get('/help_shop', [
		'as' => 'help_shop',
		'uses' => 'HomeController@help_shop'
	]);

	Route::get('/provision', [
		'as' => 'provision',
		'uses' => 'HomeController@provision'
	]);
});

Route::group(['namespace' => 'Backend'], function() {

	Route::get('/signin', [
		'as' => 'signin',
		'uses' => 'HomeController@signin'
	]);

	Route::get('/signout', [
		'as' => 'signout',
		'uses' => 'HomeController@signout'
	]);
});
