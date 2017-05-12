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

    }
}
