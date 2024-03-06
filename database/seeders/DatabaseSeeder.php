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
        $sede = new sedes();
        $sede->id = 1;
        $sede-> nom_sede = "Barcelona";
        $sede->save();

        $sede2 = new sedes();
        $sede2->id = 2;
        $sede2-> nom_sede = "Berlín";
        $sede2->save();

        $sede3 = new sedes();
        $sede3->id = 3;
        $sede3-> nom_sede = "Montreal";
        $sede3->save();

        // Creacion de
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
