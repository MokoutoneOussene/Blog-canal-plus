<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'nom_cat' => 'Annonce',
        ]);

        DB::table('categories')->insert([
            'nom_cat' => 'Evenement',
        ]);

        DB::table('categories')->insert([
            'nom_cat' => 'Formation',
        ]);

        DB::table('categories')->insert([
            'nom_cat' => 'Activité',
        ]);
    }
}
