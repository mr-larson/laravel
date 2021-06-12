<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Temoignage;
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
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        Temoignage::factory(5)->create();
        $this->call(ServiceSeeder::class);
        $this->call(ChiffreSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(HeroSeeder::class);


    }
}
