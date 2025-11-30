<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::table('reservas', function (Blueprint $table) {
        $table->integer('horas_restantes')->default(0);
        $table->date('fecha_limite')->nullable();
    });
}

public function down()
{
    Schema::table('reservas', function (Blueprint $table) {
        $table->dropColumn('horas_restantes');
        $table->dropColumn('fecha_limite');
    });
}

};
