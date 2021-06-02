<?php

namespace Database\Factories;

use App\Models\Voiture;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoitureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Voiture::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->name(),
            "description" => $this->faker->realtext(255,2),
            "ddf" => $this->faker->date("Y-m-d", "now"),
            "model" => $this->faker->text(50),
            "nds" => $this->faker->randomNumber(5)
        ];
    }
}
