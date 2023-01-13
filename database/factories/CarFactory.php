<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{



    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $engines = ['electric', 'diesel', 'gasoline', 'hybrid'];

        return [
            'brand' => fake()->text(15),
            'model' => fake()->text(20),
            'year' => fake()->numberBetween(0,2022),
            'max_speed' => fake()->numberBetween(20,300),
            'is_automatic' => fake()->boolean(),
            'number_of_doors' => fake()->numberBetween(2,5),
            'engine' => $engines[array_rand($engines, 1)]
        ];
    }
}
