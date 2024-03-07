<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class subcategoriasSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // CONSULTA DE LA CATEGORIAS PARA OBTENER SU ID
        $idCat1 = DB::table('categorias')->Where('name_cat', 'Software')->value('id');
        $idCat2 = DB::table('categorias')->Where('name_cat', 'Hardware')->value('id');

        //CREACION DE SUBCATEGORIAS
        DB::table('subcategorias')->insert([
            'id' => 1,
            'name_subcat' => 'Falla Monitor',
            'id_categoria' => $idCat2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('subcategorias')->insert([
            'id' => 2,
            'name_subcat' => 'Fallan Puertos USB',
            'id_categoria' => $idCat2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('subcategorias')->insert([
            'id' => 3,
            'name_subcat' => 'Teclado no Funciona',
            'id_categoria' => $idCat2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('subcategorias')->insert([
            'id' => 4,
            'name_subcat' => 'No enciende',
            'id_categoria' => $idCat2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('subcategorias')->insert([
            'id' => 5,
            'name_subcat' => 'No Actualiza el S.O',
            'id_categoria' => $idCat1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('subcategorias')->insert([
            'id' => 6,
            'name_subcat' => 'Actualizacion de Drivers',
            'id_categoria' => $idCat1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('subcategorias')->insert([
            'id' => 7,
            'name_subcat' => 'Se ha olvidad Contraseña',
            'id_categoria' => $idCat1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('subcategorias')->insert([
            'id' => 8,
            'name_subcat' => 'Instalacion S.O',
            'id_categoria' => $idCat1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
