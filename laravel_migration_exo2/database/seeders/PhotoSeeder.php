<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("photo")->insert([
            "name"=>"soleil",
            "description"=>"text",
            "created_at"=>now()
        ]
        ); 
    }
}
