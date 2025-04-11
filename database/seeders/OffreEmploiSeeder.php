<?php

namespace Database\Seeders;

use App\Models\OffreEmploi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class OffreEmploiSeeder extends Seeder
{
    public function run(): void
    {
        $offres = [
            [
                'titre' => 'Ingénieur civil',
                'description' => 'Nous recherchons un ingénieur civil expérimenté...',
                'location' => 'Tétouan',
                'type' => 'CDI',
                'date_expiration' => Carbon::now()->addMonths(2),
            ],
            [
                'titre' => 'Architecte',
                'description' => 'Poste d\'architecte pour nos projets résidentiels...',
                'location' => 'Tanger',
                'type' => 'CDD',
                'date_expiration' => Carbon::now()->addMonths(1),
            ],
            [
                'titre' => 'Chef de chantier',
                'description' => 'Chef de chantier pour superviser nos projets...',
                'location' => 'Rabat',
                'type' => 'Freelance',
                'date_expiration' => Carbon::now()->addMonths(3),
            ],
        ];

        foreach ($offres as $offre) {
            OffreEmploi::create([
                'titre' => $offre['titre'],
                'slug' => Str::slug($offre['titre']),
                'description' => $offre['description'],
                'location' => $offre['location'],
                'type' => $offre['type'],
                'date_expiration' => $offre['date_expiration'],
            ]);
        }

        OffreEmploi::factory(3)->create();
    }
}