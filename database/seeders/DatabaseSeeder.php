<?php

namespace Database\Seeders;

use App\Models\CartDepartement;
use App\Models\Departement;
use App\Models\Domaine;
use App\Models\Image;
use DOTNET;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            UserSeeder::class,
            
            
            OffreEmploiSeeder::class,
            ProjetSeeder::class,
            SectionSeeder::class,
            SousSectionSeeder::class,
            DepartementSeeder::class,
            CartDepartementSeeder::class,
            DomaineSeeder::class,
            CarteSeeder::class,
            ImageSeeder::class,
            ValeursBtpcSeeder::class,
           
            ChiffresBtpcSeeder::class,
        ]);
    }
}