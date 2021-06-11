<?php

namespace Database\Factories;

use App\Models\Equipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'club' => $this->faker->company(),
            'ville' => $this->faker->city(),
            'pays' => $this->faker->country(),
            "logo" =>$this->faker->unique()->file("resources/img/clubs", "public/img/clubs", false), 
            'max_joueurs' => $this->faker->numberBetween(6,9),
            'continent_id' => $this->faker->numberBetween(1,3),
            "att"=>"2",
            "mc"=>"2",
            "df"=>"2",
            "rc"=>"3",


        ];
    }
}
