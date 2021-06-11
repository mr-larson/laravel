<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('continents')->insert([ 
            "continent"=>"Europe",
            "created_at" => now(),
       ]);
       DB::table('continents')->insert([ 
        "continent"=>"Amerique",
        "created_at" => now(),
        ]);
        DB::table('continents')->insert([ 
            "continent"=>"Asie",
            "created_at" => now(),
        ]);
    }   
}
