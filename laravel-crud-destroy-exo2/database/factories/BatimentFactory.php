<?php

namespace Database\Factories;

use App\Models\Batiment;
use Illuminate\Database\Eloquent\Factories\Factory;

class BatimentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Batiment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastname,
            'adresse' => $this->faker->name(),
            'description' => $this->faker->realText(rand(10,20)),
        ];
    }
}
