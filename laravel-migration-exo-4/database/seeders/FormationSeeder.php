<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("formation")->insert ([
            "nom"=> "html",
            "description"=> "ceci est une description",
            "created_at"=>now()
        ]);

        DB::table("formation")->insert ([
            "nom"=> "html",
            "description"=> "ceci est une description",
            "created_at"=>now()
        ]);

        DB::table("formation")->insert ([
            "nom"=> "html",
            "description"=> "ceci est une description",
            "created_at"=>now()
        ]);

        DB::table("formation")->insert ([
            "nom"=> "html",
            "description"=> "ceci est une description",
            "created_at"=>now()
        ]);

        DB::table("formation")->insert ([
            "nom"=> "html",
            "description"=> "ceci est une description",
            "created_at"=>now()
        ]);

        DB::table("formation")->insert ([
            "nom"=> "html",
            "description"=> "ceci est une description",
            "created_at"=>now()
        ]);

        DB::table("formation")->insert ([
            "nom"=> "html",
            "description"=> "ceci est une description",
            "created_at"=>now()
        ]);

        DB::table("formation")->insert ([
            "nom"=> "html",
            "description"=> "ceci est une description",
            "created_at"=>now()
        ]);
    }
}
