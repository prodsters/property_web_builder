<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table("currencies")->insert([
           ["name" => "US Dollar", "symbol" => "$"],
           ["name" => "Nigerian Naira", "symbol" => "#"],
           ["name" => "GB Pounds Sterlin", "symbol" => "#"]
        ]);
    }
}
