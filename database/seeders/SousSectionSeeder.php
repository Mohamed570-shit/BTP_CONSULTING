<?php

namespace Database\Seeders;

use App\Models\SousSection;
use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SousSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sousSections = [
            ['section_titre' => 'À propos', 'titre' => 'Notre histoire', 'contenu' => 'Histoire de l\'entreprise...', 'ordre' => 1],
            ['section_titre' => 'À propos', 'titre' => 'Notre équipe', 'contenu' => 'Présentation de l\'équipe...', 'ordre' => 2],
            ['section_titre' => 'Services', 'titre' => 'Construction', 'contenu' => 'Services de construction...', 'ordre' => 1],
            ['section_titre' => 'Services', 'titre' => 'Rénovation', 'contenu' => 'Services de rénovation...', 'ordre' => 2],
            ['section_titre' => 'Services', 'titre' => 'Consultation', 'contenu' => 'Services de consultation...', 'ordre' => 3],
        ];

        foreach ($sousSections as $sousSection) {
            $section = Section::where('titre', $sousSection['section_titre'])->first();
            
            if ($section) {
                SousSection::create([
                    'section_id' => $section->id,
                    'titre' => $sousSection['titre'],
                    'slug' => Str::slug($sousSection['titre']),
                    'contenu' => $sousSection['contenu'],
                    'ordre' => $sousSection['ordre'],
                ]);
            }
        }
    }
}