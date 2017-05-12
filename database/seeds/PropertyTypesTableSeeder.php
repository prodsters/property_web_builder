<?php

use Illuminate\Database\Seeder;

class PropertyTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table("property_types")->insert([
         	["type" => "Flat"],
         	["type" => "Apartment"],
         	["type" => "Bungalow"],
         	["type" => "Chalet"],
         	["type" => "Duplex"],
         	["type" => "Country House"],
         	["type" => "Self-Contain"],
         	["type" => "Villa"],
         	["type" => "Residential Building"],
         	["type" => "Hotel"],
         	["type" => "Garage"],
         	["type" => "Penthouse"],
         	["type" => "Land"],
         	["type" => "Investment"],
         	["type" => "Studio"],
         	["type" => "Shop"],
         	["type" => "Warehouse"],
         	["type" => "Commercial Premises"]
        ]);
    }
}
