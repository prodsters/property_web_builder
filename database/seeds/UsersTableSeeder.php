<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "first_name" => "Prodsters",
            "last_name" => "Codulab",
            "email" => "test@test.com",
            "password" => bcrypt('test123'),
            "profile_pic" => "",
            "is_admin" => true
        ]);

        DB::table("users")->insert([
            "first_name" => "Seun",
            "last_name" => "Smatt",
            "email" => "test@codulab.com",
            "password" => bcrypt('test123'),
            "profile_pic" => "",
            "is_admin" => false
        ]);

        DB::table("users")->insert([
            "first_name" => "Eig",
            "last_name" => "Aigh",
            "email" => "eig@test.com",
            "password" => bcrypt('test123'),
            "profile_pic" => "",
            "is_admin" => true
        ]);

        DB::table("users")->insert([
            "first_name" => "Stanley",
            "last_name" => "Eguma",
            "email" => "test@s.eguma.com",
            "password" => bcrypt('test123'),
            "profile_pic" => "",
            "is_admin" => false
        ]);

    }
}
