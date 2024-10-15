<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'title', 'description', 'content'
            'title'=>fake()->paragraph(1),
            'description'=>fake()->paragraph(2),
            'content'=>fake()->paragraph(5),

        ];
    }
}
