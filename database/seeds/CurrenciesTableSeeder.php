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
           ["name" => "US Dollar", "symbol" => "&#36;"],
           ["name" => "Nigerian Naira", "symbol" => "&#8358;"],
           ["name" => "Euro", "symbol" => "&#8364;"]
        ]);
    }
}
