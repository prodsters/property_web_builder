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


Route::group(['namespace' => "Admin", "prefix" => "admin", "middleware" => ["auth"] ], function () {

	Route::get("dashboard", "AdminDashboardController@index")->name("admin.dashboard.index");

	//properties
	Route::match(["GET", "POST"], "property/add", "AdminPropertyController@add")->name("admin.property.add");

});

Route::get('/', function () {
    return view('welcome');
})->name('front.index');

Auth::routes();

Route::get('/home', 'HomeController@index');
