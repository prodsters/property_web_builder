<?php
/**
 * Created by PhpStorm.
 * User: smatt
 * Date: 07/08/2017
 * Time: 01:03 PM
 */

Route::group(["namespace" => "Front"], function () {


    Route::get('/', "HomeController@index")->name("front.index");




});