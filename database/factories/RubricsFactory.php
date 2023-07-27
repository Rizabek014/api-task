<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rubrics>
 */
class RubricsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'parent_id' => random_int(1,3),//Main rubric is root rubric, parent_id = 1 means first parent rubric and others are thier child
            'name' => $this->faker->word(),
        ];
    }
}
