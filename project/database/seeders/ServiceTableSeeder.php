<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'nom_service' => 'Service Technique',
            'directions_id' => 1,
        ]);

        // DB::table('services')->insert([
        //     'nom_service' => 'Service Credit',
        //     'directions_id' => 1,
        // ]);

        // DB::table('services')->insert([
        //     'nom_service' => 'Service Informatique',
        //     'directions_id' => 1,
        // ]);

        // DB::table('services')->insert([
        //     'nom_service' => 'Service moyen generauxmarketing',
        //     'directions_id' => 1,
        // ]);
    }
}
