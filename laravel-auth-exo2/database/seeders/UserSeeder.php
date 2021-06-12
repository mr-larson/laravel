<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            'name'=>'Antoine',
            'email'=>"antoine@mail.com",
            'password'=> Hash::make('antoine'),
            'role_id'=>'1',
        ]);
        
        DB::table("users")->insert([
            'name'=>'Gauthier',
            'email'=>"gauthier@mail.com",
            'password'=>Hash::make('gauthier'),
            'role_id'=>'1',
        ]);

        DB::table("users")->insert([
            'name'=>'Mahad',
            'email'=>"mahad@mail.com",
            'password'=>Hash::make('mahad'),
            'role_id'=>'2',
        ]);
        
        DB::table("users")->insert([
            'name'=>'Elias',
            'email'=>"elias@mail.com",
            'password'=>Hash::make('elias'),
            'role_id'=>'3',
        ]);

        DB::table("users")->insert([
            'name'=>'Said',
            'email'=>"said@mail.com",
            'password'=>Hash::make('said'),
            'role_id'=>'4',
        ]);
    }
}

