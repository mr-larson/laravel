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
        DB::table('roles')->insert([ 
            "poste"=>"avant",
            "created_at" => now(),
        ]);
        DB::table('roles')->insert([ 
            "poste"=>"milieu",
            "created_at" => now(),
        ]);
        DB::table('roles')->insert([ 
            "poste"=>"arrière",
            "created_at" => now(),
        ]);
        DB::table('roles')->insert([ 
            "poste"=>"remplacent",
            "created_at" => now(),
        ]);
    }
}
