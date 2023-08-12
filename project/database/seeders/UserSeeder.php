<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'OUEDRAOGO Ousseni',
            'identifiant' => 'Oouedraogo',
            'roles_id' => 2,
            'services_id' => 1,
            'code' => 'C00214',
            'statut' => 'Valide',
            'email' => 'ousseneoued@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'SAWADOGO Issouf',
            'identifiant' => 'Isawadogo',
            'roles_id' => 1,
            'services_id' => 1,
            'code' => 'C00215',
            'statut' => 'Valide',
            'email' => 'isavadogo@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'KABORE Patrick',
            'identifiant' => 'Pkabore',
            'roles_id' => 3,
            'services_id' => 1,
            'code' => 'C00216',
            'statut' => 'Valide',
            'email' => 'kpatrick@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}
