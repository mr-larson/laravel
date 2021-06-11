<?php

namespace Database\Factories;

use App\Models\Joueur;
use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $joueurs_total = count(Joueur::all()); 
        // $joueurs = Joueur::all(); 
        $joueur = $this->faker->unique()->numberBetween(1,$joueurs_total);
        return [
            'joueur_id' => $joueur,
            // "image" =>$this->faker->file("resources/img/players/man", "public/img/players", false), 
            "image" => Joueur::find($joueur)->genre->genre =="Male"?$this->faker->file("resources/img/players/man", "public/img/players", false):$this->faker->file("resources/img/players/women", "public/img/players", false), 
        ];

    }
}

// foreach ($joueurs as $joueur) {
//     if($joueur->genre->genre ==="Male"){
//         return [
//             // "image" =>$this->faker->image("public/img", 200, 200, null, false),
//             "image" =>$this->faker->file("resources/img/players/man", "public/img/players", false), 
//             'joueur_id' => $joueur->id,
//         ];
//     } else {
//         return [
//             // "image" =>$this->faker->image("public/img", 200, 200, null, false),
//             "image" =>$this->faker->file("resources/img/players/woman", "public/img/players", false), 
//             'joueur_id' => $joueur->id,
//         ];
//     };
// }