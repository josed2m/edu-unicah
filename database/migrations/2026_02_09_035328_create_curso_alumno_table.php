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
        Schema::create('curso_alumno', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_inscripcion');
            
            $table->foreignId('curso_id')->constrained()->onDelete('cascade');
            $table->foreignId('alumno_id')->constrained()->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curso_alumno');
    }
};
