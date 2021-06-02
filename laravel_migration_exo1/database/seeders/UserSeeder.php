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
        DB::table("articles")->insert ([
            "Auteur"=>"Laurent Gounelle",
            "Date"=>"2021/04/26",
            "Commentaire"=>"suite de livre de type roman philo",
            "created_at"=>now()
        ]);

        DB::table("animaux")->insert ([
            "nom"=>"leo",
            "espece"=>"lion",
            "age"=> 12,
            "ddn"=>"2009/05/18",
            "created_at"=>now()
        ]);
    }
}
