<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class sedesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //CREACIONN DE LAS SEDES
        DB::table('sedes')->insert([
            'id' => 1,
            'nom_sede' => 'Central'
        ]);
        DB::table('sedes')->insert([
            'id' => 2,
            'nom_sede' => 'Barcelona'
        ]);
        DB::table('sedes')->insert([
            'id' => 3,
            'nom_sede' => 'Berlin'
        ]);
        DB::table('sedes')->insert([
            'id' => 4,
            'nom_sede' => 'Montreal'
        ]);
    }
}
