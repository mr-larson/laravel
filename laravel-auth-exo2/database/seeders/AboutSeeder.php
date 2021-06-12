<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("abouts")->insert([
            "h3"=>"Voluptatem dignissimos provident quasi corporis",
            "p"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "li1"=>"Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "li2"=>"Duis aute irure dolor in reprehenderit in voluptate velit.",
            "li3"=>"Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.",
        ]);
    }
}
