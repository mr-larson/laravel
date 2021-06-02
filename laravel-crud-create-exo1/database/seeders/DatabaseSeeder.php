<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Livre::factory(50)->create();
        \App\Models\Image::factory(30)->create();
        \App\Models\Bibliotheque::factory(20)->create();
    }
}
