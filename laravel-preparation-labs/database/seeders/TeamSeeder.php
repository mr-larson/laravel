<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("teams")->insert([
            "photo" => "img/team/team-1.jpg",
            "twitter" => "",
            "facebook" => "",
            "insta" => "",
            "link" => "",
        ]);

        DB::table("teams")->insert([
            "photo" => "img/team/team-2.jpg",
            "twitter" => "",
            "facebook" => "",
            "insta" => "",
            "link" => "",
        ]);

        DB::table("teams")->insert([
            "photo" => "img/team/team-3.jpg",
            "twitter" => "",
            "facebook" => "",
            "insta" => "",
            "link" => "",
        ]);

        DB::table("teams")->insert([
            "photo" => "img/team/team-4.jpg",
            "twitter" => "",
            "facebook" => "",
            "insta" => "",
            "link" => "",
        ]);
    }
}
