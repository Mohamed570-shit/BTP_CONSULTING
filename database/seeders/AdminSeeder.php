<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Supprimer tous les utilisateurs existants
        User::truncate(); // Cette ligne supprime toutes les données de la table users

        // Ensuite, créer l'utilisateur administrateur
        User::create([
            'name' => 'Administrateur',
            'email' => 'admin@btpconsulting.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]);
    }
}
