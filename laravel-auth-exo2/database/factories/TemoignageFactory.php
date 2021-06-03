<?php

namespace Database\Factories;

use App\Models\Temoignage;
use Illuminate\Database\Eloquent\Factories\Factory;

class TemoignageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Temoignage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'text' => $this->faker->realText(200),
            'author' => $this->faker->name(),
            'position' => $this->faker->jobTitle (),
            'photo' => $this->faker->unique()->file("resources/img/testimonials", "public/img/testimonials", false), 
        ];


    }
}
