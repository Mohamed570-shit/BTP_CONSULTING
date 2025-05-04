<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Modifier la taille de la colonne role
        DB::statement('ALTER TABLE users MODIFY role VARCHAR(20)');

        // Khwi la table users 9bel ma tzid fiha
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Zid user admin
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Zid user RH
        DB::table('users')->insert([
            'name' => 'RH User',
            'email' => 'rh@example.com',
            'password' => Hash::make('password'),
            'role' => 'rh', // Changé de 'hr' à 'rh'
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Zid user assistance
        DB::table('users')->insert([
            'name' => 'Assistance User',
            'email' => 'assistance@example.com',
            'password' => Hash::make('password'),
            'role' => 'assistant', // Changé de 'assistance' à 'assistant'
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
