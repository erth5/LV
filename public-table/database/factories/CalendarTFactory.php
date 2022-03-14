<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CalendarT>
 */
class CalendarTFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'editor' => $this->faker->firstName(),
            'mo' => $this->faker->boolean(),
            'tu' => $this->faker->boolean(),
            'we' => $this->faker->boolean(),
            'th' => $this->faker->boolean(),
            'fr' => $this->faker->boolean(),
            'sa' => $this->faker->boolean(),
            'su' => $this->faker->boolean(),
        ];
    }
}
