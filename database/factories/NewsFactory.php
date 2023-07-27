<?php

namespace Database\Factories;

use App\Models\Authors;
use App\Models\Rubrics;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'header' => $this->faker->word,
            'announcement' => $this->faker->word,
            'text' => $this->faker->text,
            'author_id' => Authors::get()->random()->id,
            'rubric_id' => Rubrics::get()->random()->id,
        ];
    }
}
