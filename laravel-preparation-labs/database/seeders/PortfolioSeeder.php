<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("portfolios")->insert([
            "img" => "portfolio/portfolio-1.jpg",
            "h4" => "App 1",
            "p" => "App",
        ]);

        DB::table("portfolios")->insert([
            "img" => "portfolio/portfolio-2.jpg",
            "h4" => "Web 3",
            "p" => "Web",
        ]);

        DB::table("portfolios")->insert([
            "img" => "portfolio/portfolio-3.jpg",
            "h4" => "App 2",
            "p" => "App",
        ]);

        DB::table("portfolios")->insert([
            "img" => "portfolio/portfolio-4.jpg",
            "h4" => "Card 2",
            "p" => "Card",
        ]);

        DB::table("portfolios")->insert([
            "img" => "portfolio/portfolio-5.jpg",
            "h4" => "Web 2",
            "p" => "Web",
        ]);

        DB::table("portfolios")->insert([
            "img" => "portfolio/portfolio-6.jpg",
            "h4" => "App 3",
            "p" => "App",
        ]);

        DB::table("portfolios")->insert([
            "img" => "portfolio/portfolio-7.jpg",
            "h4" => "Card 1",
            "p" => "Card",
        ]);

        DB::table("portfolios")->insert([
            "img" => "portfolio/portfolio-8.jpg",
            "h4" => "Card 3",
            "p" => "Card",
        ]);

        DB::table("portfolios")->insert([
            "img" => "portfolio/portfolio-9.jpg",
            "h4" => "Web 3",
            "p" => "Web",
        ]);
    }
}
