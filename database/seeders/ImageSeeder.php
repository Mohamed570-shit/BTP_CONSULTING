<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            // Images pour Hydraulique (domaine_id = 1)
            [
                'domaine_id' => 1,
                'image' => 'domaines/hydraulique/reseau_eau.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 1,
                'image' => 'domaines/hydraulique/barrage.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 1,
                'image' => 'domaines/hydraulique/irrigation.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 1,
                'image' => 'domaines/hydraulique/station_pompage.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Images pour Génie Civil (domaine_id = 2)
            [
                'domaine_id' => 2,
                'image' => 'domaines/genie_civil/pont.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 2,
                'image' => 'domaines/genie_civil/batiment.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 2,
                'image' => 'domaines/genie_civil/route.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Images pour Environnement (domaine_id = 3)
            [
                'domaine_id' => 3,
                'image' => 'domaines/environnement/etude_impact.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 3,
                'image' => 'domaines/environnement/energie_renouvelable.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 3,
                'image' => 'domaines/environnement/gestion_dechets.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 3,
                'image' => 'domaines/environnement/biodiversite.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Images pour Aménagement Urbain (domaine_id = 4)
            [
                'domaine_id' => 4,
                'image' => 'domaines/amenagement/plan_urbain.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 4,
                'image' => 'domaines/amenagement/espace_public.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 4,
                'image' => 'domaines/amenagement/mobilite.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 4,
                'image' => 'domaines/amenagement/smart_city.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Images pour Topographie (domaine_id = 5)
            [
                'domaine_id' => 5,
                'image' => 'domaines/topographie/leve_terrain.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 5,
                'image' => 'domaines/topographie/cartographie.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'domaine_id' => 5,
                'image' => 'domaines/topographie/modele_3d.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('images')->insert($images);
    }
}