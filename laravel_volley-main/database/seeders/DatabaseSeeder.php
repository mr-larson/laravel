<?php

namespace Database\Seeders;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Photo;
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
        $this->call(GenreSeeder::class);
        $this->call(ContinentSeeder::class);
        $this->call(EquipeSeeder::class);
        Equipe::factory(20)->create();

        $joueurs = 100;

        $this->call(RoleSeeder::class);
        Joueur::factory($joueurs)->create(); 

        Photo::factory($joueurs)->create();
    } 
}
// foreach ($joueurs as $joueur) {
//     if($joueur->genre->genre ==="Male"){
//         Photo::factory()->create(); 
//     } else{
//         Photo::factory()->create(); 
//     }
// }
