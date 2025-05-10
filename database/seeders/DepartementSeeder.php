<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departements = [
            [
                'title' => 'Études Techniques',
                'subtitle' => 'Solutions d\'ingénierie',
                'description' => 'Notre département d\'études techniques offre des solutions d\'ingénierie complètes pour vos projets de construction.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Génie Civil',
                'subtitle' => 'Expertise en construction',
                'description' => 'Le département de génie civil assure la conception et la supervision des structures et infrastructures.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Architecture',
                'subtitle' => 'Conception innovante',
                'description' => 'Notre équipe d\'architectes conçoit des espaces fonctionnels et esthétiques adaptés à vos besoins.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Environnement',
                'subtitle' => 'Solutions durables',
                'description' => 'Le département environnement développe des solutions respectueuses de l\'écosystème pour vos projets.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Hydraulique',
                'subtitle' => 'Gestion des ressources en eau',
                'description' => 'Notre expertise en hydraulique couvre tous les aspects de la gestion et distribution des ressources en eau.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('departements')->insert($departements);
    }
}