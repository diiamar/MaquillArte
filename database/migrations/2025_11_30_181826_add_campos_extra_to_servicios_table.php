<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('servicios', function (Blueprint $table) {

            // Campos nuevos
            $table->string('slug')->unique()->after('nombre');
            $table->string('descripcion_corta')->nullable()->after('descripcion');
            $table->longText('descripcion_larga')->nullable()->after('descripcion_corta');
            $table->string('duracion')->nullable()->after('precio');

            // Si quieres usar "titulo" igual que en cursos, puedes duplicarlo así:
            // $table->string('titulo')->nullable()->after('id');
        });
    }

    public function down(): void
    {
        Schema::table('servicios', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('descripcion_corta');
            $table->dropColumn('descripcion_larga');
            $table->dropColumn('duracion');
        });
    }
};
