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
        Schema::create('reviews', function (Blueprint $table) {
            $table->integer('review_id', true);
            $table->string('banda', 200)->default('');
            $table->string('album', 200)->default('');
            $table->string('imagen', 200)->default('');
            $table->string('buy', 500);
            $table->string('imagenbanda', 200);
            $table->text('texto');
            $table->text('textoingles');
            $table->string('pais', 500);
            $table->text('integrantes');
            $table->string('calificacion', 500)->default('');
            $table->text('video')->default('');
            $table->text('detalles');
            $table->text('tracklist');
            $table->integer('fecha')->default(0);
            $table->string('lanzamiento', 200)->default('');
            $table->string('genero', 500)->default('');
            $table->string('tiempo', 500)->default('');
            $table->string('sello', 500);
            $table->string('productor', 500);
            $table->string('produccion', 500);
            $table->string('formato', 500);
            $table->string('codigo', 500);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
