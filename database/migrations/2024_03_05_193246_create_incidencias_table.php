<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->id();
            $table->string('name_incid',30);
            $table->string('desc_incid', 150);
            // Sin Asignar = 1 / Asignado = 2 / Reparando = 3 / Resuelta = 4 / Cerrada = 5
            $table->enum('estado_incid', [1, 2, 3, 4, 5])->default(1);
            // Tecnico al que le asignan la incidencia
            $table->unsignedBigInteger('id_tecnico');
            // Personal que pone la incidencia
            $table->unsignedBigInteger('id_cliente');
            // Ponemos la subcategoria porque asi la categoria inicial se le asigna
            $table->unsignedBigInteger('id_subcat');

            // Añadimos las relaciones a las FK
            // ID tecnico
            $table->foreign('id_tecnico')->references('id')->on('usuarios');
            // ID Personal que asigna
            $table->foreign('id_cliente')->references('id')->on('usuarios');
            // ID Subcategoria para identificar su Categoria Principal tambien
            $table->foreign('id_subcat')->references('id')->on('subcategorias');
            // Fecha de creacion y ultima modificaciom
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidencias');
    }
};
