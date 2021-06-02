<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class EleveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'nom' => $this->faker->lastname,
            'prenom' => $this->faker->firstname(),
            'age' => $this->faker->randomNumber(2),
            'etat' => $this->faker->boolean(50),
        ];
    }
}
