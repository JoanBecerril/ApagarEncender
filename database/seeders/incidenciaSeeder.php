<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class incidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // INCIDENCIAS SIN ASIGNAR DE DISTINTAS SEDES
        // BARCELONA
        DB::table('incidencias')->insert([
            'id' => 1,
            'name_incid' => 'No va el Sistema Operativo 2',
            'desc_incid' => 'El Ordenador enciende, pero no inicia el Windows y me lleva directamente al gestor de arranque',
            'prioridad_incid' => 4,  /*PRIORIDAD SIN ASIGNAR*/
            'estado_incid' => 1,  /*NO SE HA ASIGNADO A NINGUN TECNICO*/
            'id_cliente' => 8,  /*CLIENTE SEDE DE BARCELONA*/
            'id_subcat' => 1, /* ROL DE GESTOR DE EQUIPO */
        ]);
        DB::table('incidencias')->insert([
            'id' => 2,
            'name_incid' => 'No va el Sistema Operativo 2',
            'desc_incid' => 'El Ordenador enciende, pero no inicia el Windows y me lleva directamente al gestor de arranque',
            'prioridad_incid' => 4,  /*PRIORIDAD SIN ASIGNAR*/
            'estado_incid' => 1,  /*NO SE HA ASIGNADO A NINGUN TECNICO*/
            'id_cliente' => 8,  /*CLIENTE SEDE DE BARCELONA*/
            'id_subcat' => 1, /* Averia de Monitor */
        ]);

        // INCIDENCIAS ASIGNADAS DE DISTINTAS SEDES
        // 3 INCIDENCIAS CON 3 PRIORIDADES DISTINTAS
        // BARCELONA
        DB::table('incidencias')->insert([
            'id' => 5,
            'name_incid' => 'No va el Sistema Operativo',
            'desc_incid' => 'El Ordenador enciende, pero no inicia el Windows y me lleva directamente al gestor de arranque',
            'prioridad_incid' => 1,  /*PRIORIDAD ALTA*/
            'estado_incid' => 2,  /*NO SE HA ASIGNADO A NINGUN TECNICO*/
            'id_cliente' => 8,  /*CLIENTE  PABLO SEDE DE BARCELONA*/
            'id_tecnico' => 5, /* USUARIO SERGIO DE BARCELONA */
            'id_subcat' => 1, /* Averia de Monitor */
        ]);

        DB::table('incidencias')->insert([
            'id' => 6,
            'name_incid' => 'No va el Sistema Operativo',
            'desc_incid' => 'El Ordenador enciende, pero no inicia el Windows y me lleva directamente al gestor de arranque',
            'prioridad_incid' => 2,  /*PRIORIDAD MEDIA*/
            'estado_incid' => 2,  /*NO SE HA ASIGNADO A NINGUN TECNICO*/
            'id_cliente' => 8,  /*CLIENTE PABLO SEDE DE BARCELONA*/
            'id_tecnico' => 5, /* USUARIO SERGIO DE BARCELONA */
            'id_subcat' => 1, /* Averia de Monitor */
        ]);

        DB::table('incidencias')->insert([
            'id' => 7,
            'name_incid' => 'No va el Sistema Operativo',
            'desc_incid' => 'El Ordenador enciende, pero no inicia el Windows y me lleva directamente al gestor de arranque',
            'prioridad_incid' => 1,  /*PRIORIDAD BAJA*/
            'estado_incid' => 2,  /*NO SE HA ASIGNADO A NINGUN TECNICO*/
            'id_cliente' => 8,  /*CLIENTE PABLO SEDE DE BARCELONA*/
            'id_tecnico' => 5, /* USUARIO SERGIO DE BARCELONA */
            'id_subcat' => 1, /* Averia de Monitor */
        ]);
    }
}
