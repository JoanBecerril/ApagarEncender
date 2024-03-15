<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// MODELOS PARA LA CREACION DE LOS DATOS
use App\Models\categorias;
use App\Models\incidencia;
use App\Models\sedes;
use App\Models\subcategorias;
use App\Models\usuarios;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // CREACION DE SEDES
        $this->call(sedesSeeder::class);
        // CREACION DE CATEGORIAS
        $this->call(categoriasSeeder::class);
        // CREACION DE SUBCATEGORIAS
        $this->call(subcategoriasSeeeder::class);
        // CREACION DE USUARIOS
        $this->call(usuariosSeeder::class);
        // CREACION DE INCIDENCIAS
        $this->call(incidenciaSeeder::class);
    }
}
