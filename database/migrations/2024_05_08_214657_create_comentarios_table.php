<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->integer('idc', true);
            $table->string('artista', 250)->default('');
            $table->string('cancion', 250)->default('');
            $table->string('nombre', 100)->default('');
            $table->string('pais', 100)->default('');
            $table->string('mail', 250)->default('');
            $table->string('comentario', 250)->default('');
            $table->integer('fecha')->default(0);
            $table->integer('publico')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
