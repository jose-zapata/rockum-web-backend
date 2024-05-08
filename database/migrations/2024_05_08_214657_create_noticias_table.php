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
        Schema::create('noticias', function (Blueprint $table) {
            $table->integer('noticia_id', true);
            $table->string('titulo', 200)->default('');
            $table->text('texto');
            $table->integer('fecha')->default(0);
            $table->string('imagen', 250)->default('');
            $table->string('titulo_intro', 500);
            $table->text('video');
            $table->string('website', 200)->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
