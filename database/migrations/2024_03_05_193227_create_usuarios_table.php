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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('name_usr',30);
            $table->string('apell_usr',35);
            $table->string('email_usr')->unique();
            $table->string('pwd_usr',60);
            $table->enum('sede_usr', ['Central', 'Barcelona', 'Berlin', 'Montreal', 'Por definir']);
            // TIPOS DE ESTADO -> 0 = BAJA - 1 = ALTA 
            $table->boolean('estado')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
