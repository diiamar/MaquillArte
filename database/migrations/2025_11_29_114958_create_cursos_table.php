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
    Schema::create('cursos', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');
        $table->string('slug')->unique(); // URL amigable
        $table->string('imagen')->nullable();
        $table->string('duracion')->nullable();
        $table->decimal('precio', 8, 2)->nullable(); // opcional
        $table->text('descripcion_corta')->nullable();
        $table->longText('descripcion_larga')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
