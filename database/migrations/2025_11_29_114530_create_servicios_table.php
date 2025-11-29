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
    Schema::create('servicios', function (Blueprint $table) {
        $table->id();

        // Campos del servicio
        $table->string('nombre');                // Nombre del servicio
        $table->text('descripcion')->nullable(); // Descripción
        $table->decimal('precio', 8, 2);         // Precio total
        $table->boolean('requiere_reserva')->default(false); // Si necesita anticipo
        $table->decimal('precio_reserva', 8, 2)->nullable(); // Monto del anticipo
        $table->string('imagen')->nullable();    // Ruta de imagen

        $table->timestamps(); // created_at, updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }

    
};
