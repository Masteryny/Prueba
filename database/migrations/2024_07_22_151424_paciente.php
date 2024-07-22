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
            Schema::create('pacientes', function (Blueprint $table) {
                $table->id();
                $table->string('name'); // Nombre de la persona
                $table->string('last_name'); // Apellido de la persona
                $table->date('birthdate'); // Fecha de nacimiento
                $table->string('address'); // Dirección
                $table->string('phone_number'); // Número de teléfono
                $table->string('email'); // Correo electrónico
                $table->text('medical_history')->nullable(); // Historial médico (puede ser opcional)
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
