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
        DB::table("bibliotheque")->insert([
            "name"=>"anderlecht",
            "description"=>"text",
            "created_at"=>now()
        ]
        ); 

        DB::table("album")->insert([
            "name"=>"d'or et de platine",
            "description"=>"text",
            "created_at"=>now()
        ]
        ); 

        DB::table("photo")->insert([
            "name"=>"soleil",
            "description"=>"text",
            "created_at"=>now()
        ]
        ); 
    }
}
