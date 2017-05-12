<?php

use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table("features")->insert([
            ["name" => "Air Conditioning"],
            ["name" => "Security Alarm"],
            ["name" => "Backyard"],
            ["name" => "Balcony"],
            ["name" => "Caretaker Service"],
            ["name" => "Central Heating"],
            ["name" => "Children Floor"],
            ["name" => "Ceramic/Tiled Floor"],
            ["name" => "Community Area"],
            ["name" => "Community Garage"],
            ["name" => "Community Pool"],
            ["name" => "Electric Heating"],
            ["name" => "Diesel Heating"],
            ["name" => "Close to Shopping"],
            ["name" => "Fitted Wardrobe"],
            ["name" => "Independent Kitchen"],
            ["name" => "Independent Toilet"],
            ["name" => "Lift"],
            ["name" => "Jacuzzi"],
            ["name" => "Private Pool"],
            ["name" => "Sports Area"],
            ["name" => "Warehouse"],
            ["name" => "Security Guards"],
            ["name" => "Packing Space"]
        ]);
    }
}
