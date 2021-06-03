<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiffreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        DB::table("chiffres")->insert([
            "figure"=>232,
            "text"=>"clients",
        ]);
        
        DB::table("chiffres")->insert([
            "figure"=>521,
            "text"=>"projets",
        ]);
        
        DB::table("chiffres")->insert([
            "figure"=>1463,
            "text"=>"Hours Of support",
        ]);
        DB::table("chiffres")->insert([
            "figure"=>15,
            "text"=>"Hard workers",
        ]);
    }
}
