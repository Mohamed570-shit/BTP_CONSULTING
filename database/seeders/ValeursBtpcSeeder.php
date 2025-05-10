<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ValeursBtpcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $valeurs = [
            [
                'icon' => 'fas fa-handshake',
                'title' => 'Intégrité',
                'description' => 'Nous agissons avec honnêteté, transparence et éthique dans toutes nos relations professionnelles.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'fas fa-award',
                'title' => 'Excellence',
                'description' => 'Nous visons l\'excellence dans chaque projet, en dépassant les attentes de nos clients.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'fas fa-users',
                'title' => 'Collaboration',
                'description' => 'Nous croyons en la force du travail d\'équipe et de la collaboration pour atteindre des résultats exceptionnels.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'fas fa-lightbulb',
                'title' => 'Innovation',
                'description' => 'Nous encourageons l\'innovation et la créativité pour trouver des solutions adaptées aux défis complexes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'fas fa-leaf',
                'title' => 'Durabilité',
                'description' => 'Nous nous engageons à concevoir des solutions respectueuses de l\'environnement et durables.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('valeurs_btpc')->insert($valeurs);
    }
}