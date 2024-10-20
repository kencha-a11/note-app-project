<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Note>
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
            'user_id'=>\App\Models\User::factory(),
            'title'=> $this->faker->text(20),
            'description'=>$this->faker->sentence(2),
            'content'=>$this->faker->paragraph(3),

        ];
    }
}
