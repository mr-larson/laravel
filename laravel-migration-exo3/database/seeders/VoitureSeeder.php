<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("voitures")->insert([
            "nom"=>"Skoda",
            "description"=>"1,6L",
            "date"=>"2005/12/08",
            "model"=>"fabia",
            "numero"=>007,
            "created_at"=>now()
        ]);

        DB::table("voitures")->insert([
            "nom"=>"mercedes",
            "description"=>"3L",
            "date"=>"2020/12/08",
            "model"=>"A",
            "numero"=>012,
            "created_at"=>now()
        ]);

        DB::table("voitures")->insert([
            "nom"=>"audi",
            "description"=>"2,2L",
            "date"=>"2010/12/08",
            "model"=>"RS5",
            "numero"=>006,
            "created_at"=>now()
        ]);

        DB::table("voitures")->insert([
            "nom"=>"vw",
            "description"=>"1,8L",
            "date"=>"2002/12/08",
            "model"=>"golf",
            "numero"=>002,
            "created_at"=>now()
        ]);

        DB::table("voitures")->insert([
            "nom"=>"bmw",
            "description"=>"2,6L",
            "date"=>"2006/12/08",
            "model"=>"M5",
            "numero"=>017,
            "created_at"=>now()
        ]);
    }
}
