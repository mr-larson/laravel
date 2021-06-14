<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "nom" => "Walter White",
            "email" => "walter@mail.com",
            "password" => "aaaaaaaa",
        ]);

        DB::table("users")->insert([
            "nom" => "Sarah Jhonson",
            "email" => "sarah@mail.com",
            "password" => "aaaaaaaa",
        ]);

        DB::table("users")->insert([
            "nom" => "William Anderson",
            "email" => "william@mail.com",
            "password" => "aaaaaaaa",
        ]);

        DB::table("users")->insert([
            "nom" => "Amanda Jepson",
            "email" => "amanda@mail.com",
            "password" => "aaaaaaaa",
        ]);
    }
}
