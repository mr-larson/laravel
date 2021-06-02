<?php

namespace Database\Seeders;

use App\Models\Albums;
use App\Models\Photos;
use App\Models\Users;
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
        Users::factory(5)->create();
        Photos::factory(50)->create();
        Albums::factory(10)->create();
    }
}
