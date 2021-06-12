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
        DB::table("heroes")->insert([
            "h1" => "Build Better Websites With Bikin",
            "h2" => "We are team of talented designers making websites with Bootstrap",
            "img" => "hero-img.png",
        ]);
    }
}
