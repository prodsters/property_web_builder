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
	Route::get("/properties", "AdminPropertyController@index")->name("admin.property.index");
	Route::match(["GET", "POST"], "property/add", "AdminPropertyController@add")->name("admin.property.add");
	Route::post("/property/image/add", "AdminPropertyController@addPhoto")->name("admin.property.upload");
	Route::post("/property/image/delete", "AdminPropertyController@deletePhoto")->name("admin.property.delete.photo");
	Route::post("/property/update/location", "AdminPropertyController@updateLocation")->name("admin.property.update.location");
	Route::post("/property/update/details", "AdminPropertyController@updateBasicDetails")->name("admin.property.update.details");
	Route::post("/property/update/pricing", "AdminPropertyController@updatePricing")->name("admin.property.update.pricing");
	Route::post("/property/update/features", "AdminPropertyController@addFeatures")->name("admin.property.update.features");
	Route::match(["GET", "POST"], "property/edit/{id}", "AdminPropertyController@edit")->name("admin.property.edit");
});

Route::get('/', function () {
    return view('welcome');
})->name('front.index');

Auth::routes();

Route::get('/home', 'HomeController@index');
