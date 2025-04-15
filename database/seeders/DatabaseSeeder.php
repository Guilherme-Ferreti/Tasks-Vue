<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\TaskCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@example.com',
        ]);

        TaskCategory::factory(3)
            ->hasTasks(15)
            ->create();
    }
}
