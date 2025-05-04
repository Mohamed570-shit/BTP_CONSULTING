<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // ... existing code ...
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            CandidatureSeeder::class,
            ContactSeeder::class,
            OffreEmploiSeeder::class,
            ProjetSeeder::class,
            SectionSeeder::class,
            SousSectionSeeder::class,
             
        ]);
    }
// ... existing code ...
}