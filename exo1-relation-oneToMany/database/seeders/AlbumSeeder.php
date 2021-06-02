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
        DB::table("albums")->insert([
            "nom" => "Album1",
            "description" => "Ceci est l'album1"
        ]);
        DB::table("albums")->insert([
            "nom" => "Album2",
            "description" => "Ceci est l'album2"
        ]);
        DB::table("albums")->insert([
            "nom" => "Album3",
            "description" => "Ceci est l'album3"
        ]);
    }
}
