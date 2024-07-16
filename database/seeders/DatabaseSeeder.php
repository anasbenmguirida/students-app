<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            enseignantSeeder::class,
            ensmatSeeder::class,
            MatiereSeeder::class,
            UsersTableSeeder::class,
            YourTableSeederSeeder::class,
            // Add other seeders here
        ]);
    }
}
