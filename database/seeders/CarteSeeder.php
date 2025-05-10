<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cartes = [
            // Cartes pour Hydraulique (domaine_id = 1)
            [
                'domaine_id' => 1,
                'title' => 'Réseaux d\'eau potable',
                'icon' => 'fas fa-tint',
                'description' => 'Conception et dimensionnement de systèmes de distribution d\'eau potable efficaces.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 1,
                'title' => 'Assainissement',
                'icon' => 'fas fa-shower',
                'description' => 'Solutions complètes pour la collecte et le traitement des eaux usées.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 1,
                'title' => 'Irrigation',
                'icon' => 'fas fa-seedling',
                'description' => 'Systèmes d\'irrigation optimisés pour l\'agriculture et les espaces verts.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 1,
                'title' => 'Barrages et retenues',
                'icon' => 'fas fa-water',
                'description' => 'Conception et supervision de barrages et retenues d\'eau de toutes tailles.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Cartes pour Génie Civil (domaine_id = 2)
            [
                'domaine_id' => 2,
                'title' => 'Structures en béton',
                'icon' => 'fas fa-building',
                'description' => 'Conception et calcul de structures en béton armé pour tous types de bâtiments.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 2,
                'title' => 'Ouvrages d\'art',
                'icon' => 'fas fa-archway',
                'description' => 'Conception de ponts, viaducs et autres ouvrages d\'art complexes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 2,
                'title' => 'Géotechnique',
                'icon' => 'fas fa-layer-group',
                'description' => 'Études des sols et fondations pour garantir la stabilité de vos constructions.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Cartes pour Environnement (domaine_id = 3)
            [
                'domaine_id' => 3,
                'title' => 'Études d\'impact',
                'icon' => 'fas fa-search',
                'description' => 'Évaluation des conséquences environnementales de votre projet.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 3,
                'title' => 'Gestion des déchets',
                'icon' => 'fas fa-recycle',
                'description' => 'Solutions optimisées pour la collecte et le traitement des déchets.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 3,
                'title' => 'Énergies renouvelables',
                'icon' => 'fas fa-solar-panel',
                'description' => 'Intégration de sources d\'énergie propre dans vos projets.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 3,
                'title' => 'Certification environnementale',
                'icon' => 'fas fa-certificate',
                'description' => 'Accompagnement pour l\'obtention de certifications environnementales reconnues.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 3,
                'title' => 'Biodiversité',
                'icon' => 'fas fa-tree',
                'description' => 'Préservation et restauration des écosystèmes naturels dans vos projets.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Cartes pour Aménagement Urbain (domaine_id = 4)
            [
                'domaine_id' => 4,
                'title' => 'Planification urbaine',
                'icon' => 'fas fa-map',
                'description' => 'Élaboration de plans d\'aménagement urbain intégrés et durables.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 4,
                'title' => 'Mobilité urbaine',
                'icon' => 'fas fa-bus',
                'description' => 'Conception de systèmes de transport efficaces et accessibles.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 4,
                'title' => 'Espaces publics',
                'icon' => 'fas fa-users',
                'description' => 'Création d\'espaces publics conviviaux et fonctionnels.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 4,
                'title' => 'Smart City',
                'icon' => 'fas fa-wifi',
                'description' => 'Intégration de technologies intelligentes dans l\'aménagement urbain.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Cartes pour Topographie (domaine_id = 5)
            [
                'domaine_id' => 5,
                'title' => 'Levés topographiques',
                'icon' => 'fas fa-ruler',
                'description' => 'Relevés précis du terrain pour vos projets d\'aménagement.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 5,
                'title' => 'Cartographie',
                'icon' => 'fas fa-map-marked',
                'description' => 'Création de cartes détaillées et précises de votre terrain.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 5,
                'title' => 'Modélisation 3D',
                'icon' => 'fas fa-cube',
                'description' => 'Création de modèles numériques de terrain en trois dimensions.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('cartes')->insert($cartes);
    }
}