<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("features")->insert([
            "img" => "img/features-1.png",
            "h3" => "Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.",
            "i" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.",
            "p" => "",
            "li1" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "li2" => "Duis aute irure dolor in reprehenderit in voluptate velit.",
            "li3" => "Ullam est qui quos consequatur eos accusamus.",
        ]);

        DB::table("features")->insert([
            "img" => "img/features-2.png",
            "h3" => "Corporis temporibus maiores provident",
            "i" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.",
            "p" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum",
            "li1" => "",
            "li2" => "",
            "li3" => "",
        ]);

        DB::table("features")->insert([
            "img" => "img/features-3.png",
            "h3" => "Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas",
            "i" => "",
            "p" => "Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.",
            "li1" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "li2" => " Duis aute irure dolor in reprehenderit in voluptate velit.",
            "li3" => "Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.",
        ]);

        DB::table("features")->insert([
            "img" => "img/features-4.png",
            "h3" => "Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in",
            "i" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.",
            "p" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum",
            "li1" => "",
            "li2" => "",
            "li3" => "",
        ]);
    }
}
