<?php

namespace Database\Seeders;

use App\Models\Personne;
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
        Personne::Factory(20)->create();
    }
}
