<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("about_texts")->insert([
            "i" => "bx bx-receipt",
            "h4" => "Corporis voluptates sit",
            "p" => "Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip",
        ]);

        DB::table("about_texts")->insert([
            "i" => "bx bx-cube-alt",
            "h4" => "Ullamco laboris nisi",
            "p" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt",
        ]);

        DB::table("about_texts")->insert([
            "i" => "bx bx-images",
            "h4" => "Labore consequatur",
            "p" => "Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere",
        ]);

        DB::table("about_texts")->insert([
            "i" => "bx bx-shield",
            "h4" => "Beatae veritatis",
            "p" => "Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta",
        ]);
    }
}
