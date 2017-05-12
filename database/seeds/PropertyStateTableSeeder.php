<?php

use Illuminate\Database\Seeder;

class PropertyStateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table("property_states")->insert([
            ["state" => "New"],
            ["state" => "Under Construction"],
            ["state" => "Already In Use / Used"],
            ["state" => "Needs Refurbishing"]
        ]);
    }
}
