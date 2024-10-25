<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    public function run()
    {
        // Create 10 users with notes
        User::factory()
            ->count(10)
            ->hasNotes(5) // Assuming you have defined this in UserFactory
            ->create();
    }
}

