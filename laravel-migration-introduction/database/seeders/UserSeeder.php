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
            "name"=>"Elias",
            "email"=>"gg@gmail.com",
            "password"=>"lol",
            "created_at"=>now()
        ]
        );

        DB::table("users")->insert([
            "name"=>"Gaut",
            "email"=>"gauthier@gmail.com",
            "password"=>"coucou",
            "created_at"=>now()
        ]
        );
    }
}
