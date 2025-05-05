<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departement;

class DepartementSeeder extends Seeder
{
    public function run()
    {
        $departements = [
            [
                'title' => 'Département Études Techniques',
                'subtitle' => 'Solutions Techniques Innovantes',
                'description' => 'Le Département Études Techniques de BTP Consulting excelle dans la conception de projets durables, précis et adaptés aux besoins modernes de l’ingénierie.',
            ],
            [
                'title' => 'Département Hydraulique',
                'subtitle' => 'Gestion Optimale des Ressources en Eau',
                'description' => 'Expertise en gestion et optimisation des ressources hydrauliques pour des projets performants.',
            ],
            [
                'title' => 'Département Environnement',
                'subtitle' => 'Développement Durable',
                'description' => 'Solutions éco-responsables pour préserver l’environnement et promouvoir la durabilité.',
            ],
            [
                'title' => 'Département Transport',
                'subtitle' => 'Infrastructures de Transport',
                'description' => 'Réseaux de transport efficaces pour une mobilité fluide et durable.',
            ],
            [
                'title' => 'Département Innovation',
                'subtitle' => 'Innovation, IA & Ingénierie Intelligente',
                'description' => 'Technologies avancées et IA pour des solutions d’ingénierie révolutionnaires.',
            ],
        ];

        foreach ($departements as $dep) {
            \App\Models\Departement::create($dep);
        }
    }
}