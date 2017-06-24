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
	Route::post("/property/delete", "AdminPropertyController@deleteProperty")->name("admin.property.delete");
	
	Route::post("/property/image/add", "AdminPropertyController@addPhoto")->name("admin.property.upload");
	Route::post("/property/image/delete", "AdminPropertyController@deletePhoto")->name("admin.property.delete.photo");
	Route::post("/property/update/location", "AdminPropertyController@updateLocation")->name("admin.property.update.location");
	Route::post("/property/update/details", "AdminPropertyController@updateBasicDetails")->name("admin.property.update.details");
	Route::post("/property/update/pricing", "AdminPropertyController@updatePricing")->name("admin.property.update.pricing");
	Route::post("/property/update/features", "AdminPropertyController@addFeatures")->name("admin.property.update.features");
	Route::match(["GET", "POST"], "property/edit/{id}", "AdminPropertyController@edit")->name("admin.property.edit");

	//Site Settings
    //features
    Route::get('/features','AdminFeatureController@index')->name('admin.feature.index');
    Route::match(["GET","POST"],'feature/add','AdminFeatureController@add')->name('admin.feature.add');
    Route::match(["GET","POST"],'feature/edit/{feature}','AdminFeatureController@edit')->name('admin.feature.edit');
    Route::post('/feature/delete','AdminFeatureController@remove')->name('admin.feature.delete');
    //property types
    Route::get('/property-types','AdminPropertyTypeController@index')->name('admin.property_type.index');
    Route::match(["GET","POST"],'property-type/add','AdminPropertyTypeController@add')->name('admin.property_type.add');
    Route::match(["GET","POST"],'property-type/edit/{property_type}','AdminPropertyTypeController@edit')->name('admin.property_type.edit');
    Route::post('/property-type/delete','AdminPropertyTypeController@remove')->name('admin.property_type.delete');
    //property states
    Route::get('/property-states','AdminPropertyStateController@index')->name('admin.property_state.index');
    Route::match(["GET","POST"],'property-state/add','AdminPropertyStateController@add')->name('admin.property_state.add');
    Route::match(["GET","POST"],'property-state/edit/{property_state}','AdminPropertyStateController@edit')->name('admin.property_state.edit');
    Route::post('/property-state/delete','AdminPropertyStateController@remove')->name('admin.property_state.delete');
    //currencies
    Route::get('/currencies','AdminCurrencyController@index')->name('admin.currency.index');
    Route::match(["GET","POST"],'currency/add','AdminCurrencyController@add')->name('admin.currency.add');
    Route::match(["GET","POST"],'currency/edit/{currency}','AdminCurrencyController@edit')->name('admin.currency.edit');
    Route::post('/currency/delete','AdminCurrencyController@remove')->name('admin.currency.delete');

    //Site Contents
    Route::match(['GET','POST'],'contents/about','SiteContentsController@about')->name('admin.contents.about');
    Route::match(['GET','POST'],'contents/terms-and-conditions','SiteContentsController@termsAndConditions')->name('admin.contents.terms_and_conditions');
    Route::match(['GET','POST'],'contents/contact','SiteContentsController@contact')->name('admin.contents.contact');
    Route::match(['GET','POST'],'contents/footer','SiteContentsController@footer')->name('admin.contents.footer');


});

Route::get('/', function () {
    return view('welcome');
})->name('front.index');

Auth::routes();

Route::get('/home', 'HomeController@index');
