<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('equipes')->insert([ 
            "club"=>"aucun",
            "ville"=>"aucune",
            "pays"=>"aucune",
            "att"=>"2",
            "mc"=>"2",
            "df"=>"2",
            "rc"=>"3",
            "max_joueurs"=>1000,
            "continent_id"=>"1",
            "created_at" => now(),
        ]);
    }
}
