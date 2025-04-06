<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Khwi la table sections 9bel ma tzid fiha
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Section::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        $sections = [
            ['titre' => 'Accueil', 'ordre' => 1],
            ['titre' => 'À propos', 'ordre' => 2],
            ['titre' => 'Services', 'ordre' => 3],
            ['titre' => 'Projets', 'ordre' => 4],
            ['titre' => 'Carrières', 'ordre' => 5],
            ['titre' => 'Contact', 'ordre' => 6],
        ];

        foreach ($sections as $section) {
            Section::create([
                'titre' => $section['titre'],
                'slug' => Str::slug($section['titre']),
                'ordre' => $section['ordre'],
            ]);
        }
    }
}