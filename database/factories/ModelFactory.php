<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Model\Property::class, function (Faker\Generator $faker) {
	$property_type;
	$property_type;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$property = new Property();
$property->title = $request->title;
$property->description = $request->description;
$property->type_id = $request->type_id;
$property->state_id = $request->state_id;
$property->bedroom_count = $request->bedroom_count;
$property->bathroom_count = $request->bathroom_count;
$property->garage_count = $request->garage_count;
$property->plot_area = $request->plot_area;
$property->construction_area = $request->construction_area;
$property->area_unit = $request->area_unit;  
$property->is_featured = !is_null($request->is_featured) ? true : false;
$property->is_public = !is_null($request->is_public) ? true : false;

$property->sale = !is_null($request->sale) ? true : false;
$property->rental = !is_null($request->rental) ? true : false;
$property->current_selling_price = $request->current_selling_price;
$property->current_rental_price = $request->current_rental_price;
$property->original_selling_price = $request->original_selling_price;
$property->original_rental_price = $request->original_rental_price;
$property->currency_id = $request->currency_id;
$property->user_id = Auth::id();
$property->reference_no = str_random(5);

$property->street_address = $request->street_address;
$property->street_number = $request->street_number;
$property->city = $request->city;
$property->region = $request->region;
$property->country = $request->country;
$property->postal_code = $request->postal_code;
