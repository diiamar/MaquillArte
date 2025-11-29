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
    Schema::create('reservas', function (Blueprint $table) {
        $table->id();

        $table->unsignedBigInteger('id_usuario'); // cliente
        
        // Puede ser reserva de servicio o curso
        $table->enum('tipo', ['servicio', 'curso']);

        // ID del servicio o curso
        $table->unsignedBigInteger('id_item');

        $table->datetime('fecha');

        // Pago del anticipo
        $table->decimal('monto_pago', 8, 2)->default(0);
        $table->enum('estado_pago', ['pendiente', 'pagado'])->default('pendiente');

        $table->timestamps();

        // Relaciones
        $table->foreign('id_usuario')
              ->references('id')->on('users')
              ->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
