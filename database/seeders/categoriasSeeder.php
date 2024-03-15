<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //CREACION DE CATEGORIAS
        DB::table('categorias')->insert([
            'id' => 1,
            'name_cat' => 'Software'
        ]);
        DB::table('categorias')->insert([
            'id' => 2,
            'name_cat' => 'Hardware'
        ]);
    }
}
