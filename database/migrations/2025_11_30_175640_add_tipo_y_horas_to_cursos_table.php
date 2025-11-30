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
    Schema::table('cursos', function (Blueprint $table) {
        $table->enum('tipo', ['personalizado', 'intensivo'])->default('personalizado');
        $table->integer('horas_totales')->default(4);
    });
}

public function down()
{
    Schema::table('cursos', function (Blueprint $table) {
        $table->dropColumn('tipo');
        $table->dropColumn('horas_totales');
    });
}

};
