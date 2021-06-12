<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("heros")->insert([
            "h1"=>"Bettter Digital Experience With Techie",
            "h2"=>"We are team of talented designers making websites with Bootstrap",
            "image"=>"hero-img.png",
        ]);
    }
}
