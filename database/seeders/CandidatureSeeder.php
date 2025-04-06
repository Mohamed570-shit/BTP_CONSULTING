<?php

namespace Database\Seeders;

use App\Models\Candidature;
use App\Models\OffreEmploi;
use Illuminate\Database\Seeder;

class CandidatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offres = OffreEmploi::all();
        
        foreach ($offres as $offre) {
            Candidature::factory(3)->create([
                'offre_id' => $offre->id,
            ]);
        }
    }
}