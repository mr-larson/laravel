<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert([
            "poste" => "Chief Executive Officer",
        ]);

        DB::table("roles")->insert([
            "poste" => "Product Manager",
        ]);

        DB::table("roles")->insert([
            "poste" => "CTO",
        ]);

        DB::table("roles")->insert([
            "poste" => "Accountant",
        ]);
    }
}
