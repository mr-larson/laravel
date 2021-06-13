<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("links")->insert([
            "h4" => "Useful Links",
            "li1" => "Home",
            "li2" => "About us",
            "li3" => "Services",
            "li4" => "Terms of service",
            "li5" => "Privacy policy",
        ]);

        DB::table("links")->insert([
            "h4" => "Our Services",
            "li1" => "Web Design",
            "li2" => "Web Development",
            "li3" => "Product Management",
            "li4" => "Marketing",
            "li5" => "Graphic Design",
        ]);
    }
}
