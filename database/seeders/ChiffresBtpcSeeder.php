<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiffresBtpcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chiffres = [
            [
                'icon' => 'fas fa-project-diagram',
                'value' => '250+',
                'label' => 'Projets réalisés',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'fas fa-users',
                'value' => '50+',
                'label' => 'Experts qualifiés',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'fas fa-globe-africa',
                'value' => '15+',
                'label' => 'Pays d\'intervention',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'fas fa-award',
                'value' => '20+',
                'label' => 'Années d\'expérience',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'fas fa-handshake',
                'value' => '100+',
                'label' => 'Clients satisfaits',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('chiffres_btpc')->insert($chiffres);
    }
}