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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fechaContratacion');
            $table->float('salario');
            $table->integer('horasTrabajadas');
            $table->string('departamento');
            $table->boolean('estadoPagado')->default(false);
            $table->foreignId('id_tarea')->constrained('tareas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
