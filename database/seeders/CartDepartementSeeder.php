<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departement;
use App\Models\CartDepartement;

class CartDepartementSeeder extends Seeder
{
    public function run()
    {
        $cartes = [
            // Département 1
            [
                'departement_title' => 'Département Études Techniques',
                'cartes' => [
                    [
                        'title' => 'Planification & Contrôle Qualité',
                        'icon' => 'fas fa-tasks',
                        'description' => 'Coordination efficace des plannings et contrôles qualité pour des livrables irréprochables.',
                        'image' => 'etudes-techniques-1.jpg',
                    ],
                    [
                        'title' => 'Structures & Ingénierie Civile',
                        'icon' => 'fas fa-university',
                        'description' => 'Conception des structures solides pour des bâtiments et infrastructures pérennes.',
                        'image' => 'etudes-techniques-2.jpg',
                    ],
                    [
                        'title' => 'Ingénierie Hydraulique',
                        'icon' => 'fas fa-water',
                        'description' => 'Gestion optimale des ressources en eau et réseaux hydrauliques performants.',
                        'image' => 'etudes-techniques-3.jpg',
                    ],
                    [
                        'title' => 'Environnement & Développement Durable',
                        'icon' => 'fas fa-leaf',
                        'description' => 'Solutions éco-responsables pour préserver l’environnement et promouvoir la durabilité.',
                        'image' => 'etudes-techniques-4.jpg',
                    ],
                    [
                        'title' => 'Aménagement Rural & Développement Agricole',
                        'icon' => 'fas fa-tractor',
                        'description' => 'Projets pour revitaliser les zones rurales et soutenir l’agriculture durable.',
                        'image' => 'etudes-techniques-5.jpg',
                    ],
                    [
                        'title' => 'Infrastructures & Aménagement Urbain',
                        'icon' => 'fas fa-city',
                        'description' => 'Planification des espaces urbains modernes et fonctionnels pour la ville de demain.',
                        'image' => 'etudes-techniques-6.jpg',
                    ],
                    [
                        'title' => 'Innovation, IA & Ingénierie Intelligente',
                        'icon' => 'fas fa-robot',
                        'description' => 'Technologies avancées et IA pour des solutions d’ingénierie révolutionnaires.',
                        'image' => 'etudes-techniques-7.jpg',
                    ],
                ]
            ],
            // Département 2
            [
                'departement_title' => 'Département Hydraulique',
                'cartes' => [
                    [
                        'title' => 'Gestion des Barrages',
                        'icon' => 'fas fa-dam',
                        'description' => 'Études et gestion de barrages pour la sécurité et l’approvisionnement en eau.',
                        'image' => 'hydraulique-1.jpg',
                    ],
                    [
                        'title' => 'Hydraulique Urbaine',
                        'icon' => 'fas fa-tint',
                        'description' => 'Gestion des réseaux d’eau potable et d’assainissement urbain.',
                        'image' => 'hydraulique-2.jpg',
                    ],
                    [
                        'title' => 'Études d’Impact Hydraulique',
                        'icon' => 'fas fa-water',
                        'description' => 'Analyse des impacts hydrauliques sur l’environnement.',
                        'image' => 'hydraulique-3.jpg',
                    ],
                ]
            ],
            // Département 3
            [
                'departement_title' => 'Département Environnement',
                'cartes' => [
                    [
                        'title' => 'Études Environnementales',
                        'icon' => 'fas fa-leaf',
                        'description' => 'Évaluation des impacts environnementaux pour des projets durables.',
                        'image' => 'environnement-1.jpg',
                    ],
                    [
                        'title' => 'Gestion des Déchets',
                        'icon' => 'fas fa-recycle',
                        'description' => 'Solutions pour la gestion et la valorisation des déchets.',
                        'image' => 'environnement-2.jpg',
                    ],
                    [
                        'title' => 'Énergies Renouvelables',
                        'icon' => 'fas fa-solar-panel',
                        'description' => 'Développement de projets d’énergies propres et renouvelables.',
                        'image' => 'environnement-3.jpg',
                    ],
                    [
                        'title' => 'Protection de la Biodiversité',
                        'icon' => 'fas fa-paw',
                        'description' => 'Actions pour préserver la faune et la flore locales.',
                        'image' => 'environnement-4.jpg',
                    ],
                ]
            ],
            // Département 4
            [
                'departement_title' => 'Département Transport',
                'cartes' => [
                    [
                        'title' => 'Infrastructures Routières',
                        'icon' => 'fas fa-road',
                        'description' => 'Conception et suivi des routes et autoroutes.',
                        'image' => 'transport-1.jpg',
                    ],
                    [
                        'title' => 'Transports Urbains',
                        'icon' => 'fas fa-bus',
                        'description' => 'Développement de réseaux de transports urbains efficaces.',
                        'image' => 'transport-2.jpg',
                    ],
                    [
                        'title' => 'Mobilité Durable',
                        'icon' => 'fas fa-bicycle',
                        'description' => 'Solutions pour une mobilité respectueuse de l’environnement.',
                        'image' => 'transport-3.jpg',
                    ],
                ]
            ],
            // Département 5
            [
                'departement_title' => 'Département Innovation',
                'cartes' => [
                    [
                        'title' => 'Intelligence Artificielle',
                        'icon' => 'fas fa-brain',
                        'description' => 'Intégration de l’IA dans les processus d’ingénierie.',
                        'image' => 'innovation-1.jpg',
                    ],
                    [
                        'title' => 'Transformation Digitale',
                        'icon' => 'fas fa-digital-tachograph',
                        'description' => 'Digitalisation des outils et méthodes de travail.',
                        'image' => 'innovation-2.jpg',
                    ],
                    [
                        'title' => 'Smart Cities',
                        'icon' => 'fas fa-city',
                        'description' => 'Développement de villes intelligentes et connectées.',
                        'image' => 'innovation-3.jpg',
                    ],
                    [
                        'title' => 'Robotique & Automatisation',
                        'icon' => 'fas fa-robot',
                        'description' => 'Automatisation des tâches pour plus d’efficacité.',
                        'image' => 'innovation-4.jpg',
                    ],
                ]
            ],
        ];

        foreach ($cartes as $depCartes) {
            $departement = Departement::where('title', $depCartes['departement_title'])->first();
            if ($departement) {
                foreach ($depCartes['cartes'] as $carte) {
                    CartDepartement::create([
                        'departement_id' => $departement->id,
                        'title' => $carte['title'],
                        'icon' => $carte['icon'],
                        'description' => $carte['description'],
                        'image' => $carte['image'],
                    ]);
                }
            }
        }
    }
}