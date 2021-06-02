<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("batiment")->insert ([
            "nom"=> "jacques",
            "description"=> "ceci est une description",
            "created_at"=>now()
        ]);
    }
}
