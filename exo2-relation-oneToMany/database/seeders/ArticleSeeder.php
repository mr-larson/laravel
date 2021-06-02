<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("articles")->insert([
            "nom" => "article1",
            "image" => "image",
            "categorie" => "categorie1",
            "description" => "Ceci est l'article1"
        ]);
        DB::table("articles")->insert([
            "nom" => "article2",
            "image" => "image",
            "categorie" => "categorie2",
            "description" => "Ceci est l'article2"
        ]);
        DB::table("articles")->insert([
            "nom" => "article3",
            "image" => "image",
            "categorie" => "categorie3",
            "description" => "Ceci est l'article3"
        ]);
    }
}
