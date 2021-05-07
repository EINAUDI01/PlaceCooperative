<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{ User, Cooperateur };

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Cooperateur::factory()
            ->has(User::factory()->count(4))
            ->count(10)
            ->create();
    }
}
