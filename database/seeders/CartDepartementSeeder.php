<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Departement;

class CartDepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all departements
        $departements = Departement::all();

        $cartes = [
            // Cartes pour Études Techniques
            [
                'departement_id' => 1,
                'title' => 'Études de faisabilité',
                'icon' => 'fas fa-chart-line',
                'description' => 'Analyse complète pour déterminer la viabilité technique et économique de votre projet.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'departement_id' => 1,
                'title' => 'Conception technique',
                'icon' => 'fas fa-drafting-compass',
                'description' => 'Élaboration des plans et spécifications techniques détaillés pour votre projet.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'departement_id' => 1,
                'title' => 'Supervision des travaux',
                'icon' => 'fas fa-hard-hat',
                'description' => 'Suivi rigoureux de l\'exécution des travaux conformément aux plans et normes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'departement_id' => 1,
                'title' => 'Audit technique',
                'icon' => 'fas fa-clipboard-check',
                'description' => 'Évaluation indépendante de la qualité et conformité des installations existantes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Cartes pour Génie Civil
            [
                'departement_id' => 2,
                'title' => 'Structures en béton',
                'icon' => 'fas fa-building',
                'description' => 'Conception et calcul de structures en béton armé pour tous types de bâtiments.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'departement_id' => 2,
                'title' => 'Ouvrages d\'art',
                'icon' => 'fas fa-archway',
                'description' => 'Conception de ponts, viaducs et autres ouvrages d\'art complexes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'departement_id' => 2,
                'title' => 'Géotechnique',
                'icon' => 'fas fa-mountain',
                'description' => 'Études des sols et fondations pour garantir la stabilité de vos constructions.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Cartes pour Architecture
            [
                'departement_id' => 3,
                'title' => 'Conception architecturale',
                'icon' => 'fas fa-pencil-ruler',
                'description' => 'Création de designs innovants et fonctionnels adaptés à vos besoins spécifiques.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'departement_id' => 3,
                'title' => 'Aménagement intérieur',
                'icon' => 'fas fa-couch',
                'description' => 'Optimisation des espaces intérieurs pour un confort et une esthétique maximale.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'departement_id' => 3,
                'title' => 'Modélisation 3D',
                'icon' => 'fas fa-cube',
                'description' => 'Visualisation réaliste de votre projet avant sa réalisation.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'departement_id' => 3,
                'title' => 'Architecture durable',
                'icon' => 'fas fa-leaf',
                'description' => 'Conception respectueuse de l\'environnement intégrant les principes de développement durable.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'departement_id' => 3,
                'title' => 'Rénovation',
                'icon' => 'fas fa-hammer',
                'description' => 'Transformation et modernisation de bâtiments existants.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Cartes pour Environnement
            [
                'departement_id' => 4,
                'title' => 'Études d\'impact',
                'icon' => 'fas fa-seedling',
                'description' => 'Évaluation des conséquences environnementales de votre projet.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'departement_id' => 4,
                'title' => 'Gestion des déchets',
                'icon' => 'fas fa-recycle',
                'description' => 'Solutions optimisées pour la collecte et le traitement des déchets.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'departement_id' => 4,
                'title' => 'Énergies renouvelables',
                'icon' => 'fas fa-solar-panel',
                'description' => 'Intégration de sources d\'énergie propre dans vos projets.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'departement_id' => 4,
                'title' => 'Certification environnementale',
                'icon' => 'fas fa-certificate',
                'description' => 'Accompagnement pour l\'obtention de certifications environnementales reconnues.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Cartes pour Hydraulique
            [
                'departement_id' => 5,
                'title' => 'Réseaux d\'eau potable',
                'icon' => 'fas fa-tint',
                'description' => 'Conception et dimensionnement de systèmes de distribution d\'eau potable.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'departement_id' => 5,
                'title' => 'Assainissement',
                'icon' => 'fas fa-water',
                'description' => 'Solutions pour la collecte et le traitement des eaux usées.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'departement_id' => 5,
                'title' => 'Irrigation',
                'icon' => 'fas fa-shower',
                'description' => 'Systèmes d\'irrigation efficaces pour l\'agriculture et les espaces verts.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('cart_departements')->insert($cartes);
    }
}