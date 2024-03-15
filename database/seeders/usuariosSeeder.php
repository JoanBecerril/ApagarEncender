<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // CONSULTA DE LAS SEDES PARA OBTENER SU ID
        $idsede1 = DB::table('sedes')->Where('nom_sede', 'Central')->value('id');
        $idsede2 = DB::table('sedes')->Where('nom_sede', 'Barcelona')->value('id');
        $idsede3 = DB::table('sedes')->Where('nom_sede', 'Berlin')->value('id');
        $idsede4 = DB::table('sedes')->Where('nom_sede', 'Montreal')->value('id');
        
        //CREACION DE USUARIOS EN EL SISTEMA
        // ADMINISTRADOR
        DB::table('usuarios')->insert([
            'id' => 1,
            'name_usr' => 'Joel',
            'apell_usr' => 'Vicente',
            'email_usr' => 'vicentejoel@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123') ,
            'estado' => 1, /* ESTADO DE ALTA */
            'rol_usr' => 1, /* ROL DE ADMIN */
            'id_sede' => $idsede1, /* SEDE CENTRAL */
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('usuarios')->insert([
            'id' => 2,
            'name_usr' => 'Jorge',
            'apell_usr' => 'Alcalde',
            'email_usr' => 'alcaldejorge@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123') ,
            'estado' => 0, /* ESTADO DE BAJA */
            'rol_usr' => 1, /* ROL DE ADMIN */
            'id_sede' => $idsede1, /* SEDE CENTRAL */
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // SEDE DE BARCELONA
        // GESTORES DE EQUIPOS
        DB::table('usuarios')->insert([
            'id' => 3,
            'name_usr' => 'Manel',
            'apell_usr' => 'Garcia',
            'email_usr' => 'garciamanel@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 1,  /* DADO DE ALTA */
            'rol_usr' => 2, /* ROL DE GESTOR DE EQUIPO */
            'id_sede' => $idsede2, /* SEDE BARCELONA */
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('usuarios')->insert([
            'id' => 4,
            'name_usr' => 'Sergi',
            'apell_usr' => 'Marin',
            'email_usr' => 'marinsergi@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 0,  /* DADO DE BAJA */
            'rol_usr' => 2, /* ROL DE GESTOR DE EQUIPO */
            'id_sede' => $idsede2 /* SEDE BARCELONA */
        ]);

        // TECNICOS
        DB::table('usuarios')->insert([
            'id' => 5,
            'name_usr' => 'Sergio',
            'apell_usr' => 'Leon',
            'email_usr' => 'leonsergio@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 1, /* DADO DE ALTA */
            'rol_usr' => 3, /* ROL DE TECNICO */
            'id_sede' => $idsede2, /* SEDE BARCELONA */
            'created_at' => now(),
            'updated_at' => now()
        ]);
        // BARCELONA DESHABILITADO
        DB::table('usuarios')->insert([
            'id' => 6,
            'name_usr' => 'Ian',
            'apell_usr' => 'Romero',
            'email_usr' => 'romeroian@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 0, /* DADO DE BAJA */
            'rol_usr' => 3, /* ROL DE TECNICO */
            'id_sede' => $idsede2,  /* SEDE BARCELONA */
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // CLIENTES
        DB::table('usuarios')->insert([
            'id' => 7,
            'name_usr' => 'Carlos',
            'apell_usr' => 'Mendoza',
            'email_usr' => '@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 0, /* DADO DE BAJA */
            'rol_usr' => 4, /* ROL DE CLIENTE */
            'id_sede' => $idsede2,  /* SEDE BARCELONA */
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('usuarios')->insert([
            'id' => 8,
            'name_usr' => 'Pablo',
            'apell_usr' => 'Maragal',
            'email_usr' => 'maragalpablo@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 1, /* DADO DE ALTA */
            'rol_usr' => 4, /* ROL DE CLIENTE */
            'id_sede' => $idsede2,  /* SEDE BARCELONA */
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // SEDE DE BERLIN
        // GESTORES DE EQUIPOS
        DB::table('usuarios')->insert([
            'id' => 9,
            'name_usr' => 'Nadi',
            'apell_usr' => 'Cortes',
            'email_usr' => 'cortesnadi@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 1,  /* DADO DE ALTA */
            'rol_usr' => 2, /* ROL DE GESTOR DE EQUIPO */
            'id_sede' => $idsede3, /* SEDE BARCELONA */
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('usuarios')->insert([
            'id' => 10,
            'name_usr' => 'Jose',
            'apell_usr' => 'Alvarez',
            'email_usr' => 'alvarezjose@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 0,  /* DADO DE BAJA */
            'rol_usr' => 2, /* ROL DE GESTOR DE EQUIPO */
            'id_sede' => $idsede3, /* SEDE BARCELONA */
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // TECNICOS
        DB::table('usuarios')->insert([
            'id' => 11,
            'name_usr' => 'Alberto',
            'apell_usr' => 'Santos',
            'email_usr' => 'santosalberto@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 1, /* DADO DE ALTA */
            'rol_usr' => 3, /* ROL DE TECNICO */
            'id_sede' => $idsede3, /* SEDE BARCELONA */
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('usuarios')->insert([
            'id' => 12,
            'name_usr' => 'Julian',
            'apell_usr' => 'Lopez',
            'email_usr' => 'lopezjulian@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 0, /* DADO DE BAJA */
            'rol_usr' => 3, /* ROL DE TECNICO */
            'id_sede' => $idsede3,  /* SEDE BARCELONA */
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // CLIENTES
        DB::table('usuarios')->insert([
            'id' => 13,
            'name_usr' => 'Cristian',
            'apell_usr' => 'Aragon',
            'email_usr' => 'aragoncristian@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 0, /* DADO DE BAJA */
            'rol_usr' => 4, /* ROL DE CLIENTE */
            'id_sede' => $idsede3,  /* SEDE BARCELONA */
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('usuarios')->insert([
            'id' => 14,
            'name_usr' => 'Josep',
            'apell_usr' => 'Manchado',
            'email_usr' => 'manchadojosep@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 1, /* DADO DE ALTA */
            'rol_usr' => 4, /* ROL DE CLIENTE */
            'id_sede' => $idsede3,  /* SEDE BARCELONA */
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // SEDE DE MONTREAL
        // GESTORES DE EQUIPOS
        DB::table('usuarios')->insert([
            'id' => 15,
            'name_usr' => 'Jesus',
            'apell_usr' => 'De Santos',
            'email_usr' => 'desantosjesus@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 1,  /* DADO DE ALTA */
            'rol_usr' => 2, /* ROL DE GESTOR DE EQUIPO */
            'id_sede' => $idsede4, /* SEDE BARCELONA */
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('usuarios')->insert([
            'id' => 16,
            'name_usr' => 'Oscar',
            'apell_usr' => 'Sanchez',
            'email_usr' => 'sanchezoscar@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 0,  /* DADO DE BAJA */
            'rol_usr' => 2, /* ROL DE GESTOR DE EQUIPO */
            'id_sede' => $idsede4, /* SEDE BARCELONA */
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // TECNICOS
        DB::table('usuarios')->insert([
            'id' => 17,
            'name_usr' => 'Tomas',
            'apell_usr' => 'Garzon',
            'email_usr' => 'garzontomas@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 1, /* DADO DE ALTA */
            'rol_usr' => 3, /* ROL DE TECNICO */
            'id_sede' => $idsede4, /* SEDE BARCELONA */
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('usuarios')->insert([
            'id' => 18,
            'name_usr' => 'Eric',
            'apell_usr' => 'Molina',
            'email_usr' => 'molinaeric@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 0, /* DADO DE BAJA */
            'rol_usr' => 3, /* ROL DE TECNICO */
            'id_sede' => $idsede4,  /* SEDE BARCELONA */
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // CLIENTES
        DB::table('usuarios')->insert([
            'id' => 19,
            'name_usr' => 'Ricardo',
            'apell_usr' => 'Casals',
            'email_usr' => 'casalsricardo@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 0, /* DADO DE BAJA */
            'rol_usr' => 4, /* ROL DE CLIENTE */
            'id_sede' => $idsede4,  /* SEDE BARCELONA */
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('usuarios')->insert([
            'id' => 20,
            'name_usr' => 'Gerardo',
            'apell_usr' => 'Orobitg',
            'email_usr' => 'orobitggerardo@gmail.com',
            'pwd_usr' => bcrypt('qweQWE123'),
            'estado' => 1, /* DADO DE ALTA */
            'rol_usr' => 4, /* ROL DE CLIENTE */
            'id_sede' => $idsede4,  /* SEDE BARCELONA */
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
