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
        Schema::create('entrevistas', function (Blueprint $table) {
            $table->integer('entrevista_id', true);
            $table->string('titulo', 100)->default('');
            $table->string('titulo_intro', 250)->default('');
            $table->text('texto');
            $table->string('imagen', 250)->default('');
            $table->string('titulo_eng', 100)->default('');
            $table->string('titulo_intro_eng', 250)->default('');
            $table->text('texto_eng');
            $table->integer('fecha')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrevistas');
    }
};
