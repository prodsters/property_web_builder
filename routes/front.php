<?php
/**
 * Created by PhpStorm.
 * User: smatt
 * Date: 07/08/2017
 * Time: 01:03 PM
 */

Route::group(["namespace" => "Front"], function () {


    Route::get('/', "HomeController@index")->name("front.index");
    Route::get('/properties', "HomeController@properties")->name("front.properties");
    Route::get("/properties/type/{type}", "HomeController@propertiesByType")->name("front.properties.type");
    Route::get("/properties/{id}", "HomeController@detail")->name("front.properties.detail");




});