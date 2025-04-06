<?php

namespace Database\Seeders;

use App\Models\Projet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projets = [
            ['titre' => 'Immeuble résidentiel', 'description' => 'Construction d\'un immeuble résidentiel de 10 étages...', 'status' => 'terminé'],
            ['titre' => 'Centre commercial', 'description' => 'Construction d\'un centre commercial de 5000m²...', 'status' => 'en cours'],
            ['titre' => 'École primaire', 'description' => 'Rénovation d\'une école primaire...', 'status' => 'terminé'],
            ['titre' => 'Hôpital', 'description' => 'Construction d\'un hôpital moderne...', 'status' => 'en cours'],
        ];

        foreach ($projets as $projet) {
            Projet::create([
                'titre' => $projet['titre'],
                'slug' => Str::slug($projet['titre']),
                'description' => $projet['description'],
                'image' => null,
                'status' => $projet['status'],
            ]);
        }

        Projet::factory(4)->create();
    }
}