<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            "password" => Hash::make("aaaaaaaa"),
            'role_id'=>'1'
        ]);

        DB::table("users")->insert([
            "nom" => "Sarah Jhonson",
            "email" => "sarah@mail.com",
            "password" => "aaaaaaaa",
            'role_id'=>'2'
        ]);

        DB::table("users")->insert([
            "nom" => "William Anderson",
            "email" => "william@mail.com",
            "password" => "aaaaaaaa",
            'role_id'=>'3'
        ]);

        DB::table("users")->insert([
            "nom" => "Amanda Jepson",
            "email" => "amanda@mail.com",
            "password" => "aaaaaaaa",
            'role_id'=>'4'
        ]);
    }
}
