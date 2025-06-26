<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Désactivation temporaire des contraintes FK
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Supprimer tous les utilisateurs existants sans utiliser truncate
        User::query()->delete();

        // Réactiver les contraintes FK
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Créer l'utilisateur administrateur
        User::create([
            'name' => 'Administrateur',
            'email' => 'admin@btpconsulting.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]);
    }
}
