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
        // \App\Models\User::factory(10)->create();
        $this->call(HeroSeeder::class);
        $this->call(AboutTitreSeeder::class);
        $this->call(AboutTextSeeder::class);
        $this->call(FeatureSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(TestimonialSeeder::class);
    }
}
