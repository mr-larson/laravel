<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("album")->insert([
            "name"=>"d'or et de platine",
            "description"=>"text",
            "created_at"=>now()
        ]
        ); 

    }
}
