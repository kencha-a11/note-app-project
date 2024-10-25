<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Note;
use App\Models\User;
use League\CommonMark\Node\Block\Paragraph;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

            foreach ($users as $user) {
                Note::create([
                    'title' => fake()->sentence(1),
                    'description' => fake()->sentence(2),
                    'content' => fake()->paragraph(1),
                    'user_id' => $user->id,
                ]);
            }
    }
}