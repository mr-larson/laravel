<?php

namespace Database\Factories;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;

class JoueurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Joueur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $equipes = count(Equipe::all());

        return [
            'nom' => $this->faker->firstName(),
            'prenom' => $this->faker->lastName(),
            'age' => $this->faker->numberBetween(15,40),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'genre_id' => $this->faker->numberBetween(1,2),
            'origine' => $this->faker->country(),
            'role_id' => $this->faker->numberBetween(1,4),
            // 'role_id' => $this->faker->randomElement(array("a","b","c","d")),
            'equipe_id' => $this->faker->numberBetween(1,$equipes),
        ];
    }
}
