<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
<<<<<<< HEAD
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Note>
=======
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
>>>>>>> 64a5ab2a5988cab9cf331743d868ea1b5066a892
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
