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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('especie'); // Perro, Gato, etc.
            $table->string('raza');
            $table->integer('edad');
            // Relaciones (Claves Foráneas)
            $table->foreignId('dueno_id')->constrained('duenos')->onDelete('cascade');
            $table->foreignId('veterinario_id')->constrained('veterinarios')->onDelete('cascade');
            $table->boolean('adoptado')->default(false);
            $table->text('notas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
