<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdresseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("adresses")->insert([
            "rue" => "A108 Adam Street",
            "ville" => "New York, NY 535022",
            "pays" => "United States",
            "phone" => "1 5589 55488 55",
            "email" => "info@example.com",
        ]);
    }
}
