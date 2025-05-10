<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DomaineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $domaines = [
            [
                'title' => 'Hydraulique',
                'subtitle' => 'Gestion des ressources en eau',
                'description' => 'Notre expertise en hydraulique couvre tous les aspects de la gestion et distribution des ressources en eau.',
                'icon' => 'fas fa-water',
                'question' => 'Besoin d\'optimiser vos ressources en eau?',
                'reponse' => 'Nos experts en hydraulique vous accompagnent dans tous vos projets liés à l\'eau.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Génie Civil',
                'subtitle' => 'Construction et infrastructures',
                'description' => 'Notre département de génie civil conçoit et supervise la réalisation de structures durables et innovantes.',
                'icon' => 'fas fa-building',
                'question' => 'Un projet de construction complexe?',
                'reponse' => 'Nos ingénieurs en génie civil vous garantissent des structures fiables et pérennes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Environnement',
                'subtitle' => 'Solutions écologiques',
                'description' => 'Nous développons des solutions respectueuses de l\'environnement pour minimiser l\'impact de vos projets.',
                'icon' => 'fas fa-leaf',
                'question' => 'Comment réduire l\'impact environnemental de votre projet?',
                'reponse' => 'Notre équipe environnementale vous propose des solutions durables et conformes aux normes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Aménagement Urbain',
                'subtitle' => 'Planification urbaine intégrée',
                'description' => 'Nous concevons des espaces urbains fonctionnels, esthétiques et adaptés aux besoins des communautés.',
                'icon' => 'fas fa-city',
                'question' => 'Comment transformer votre espace urbain?',
                'reponse' => 'Nos urbanistes créent des espaces harmonieux qui répondent aux besoins actuels et futurs.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Topographie',
                'subtitle' => 'Mesures et cartographie précises',
                'description' => 'Notre équipe topographique utilise des technologies avancées pour des relevés précis et fiables.',
                'icon' => 'fas fa-mountain',
                'question' => 'Besoin de données topographiques précises?',
                'reponse' => 'Nos topographes utilisent des équipements de pointe pour garantir l\'exactitude de vos données.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('domaines')->insert($domaines);
    }
} 