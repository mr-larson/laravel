<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
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
        $this->call(BatimentSeeder::class);
        $this->call(FormationSeeder::class);
        $this->call(TypeFormationSeeder::class);
        Model::factory(50)->create();
    }
}
