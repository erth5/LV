<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PublicT>
 */
class PublicTFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'editor' => $this->faker->name(),
            'word1' => $this->faker->text(),
            'word2' => $this->faker->word(),
            'word3' => $this->faker->slug(),
        ];
    }
}
