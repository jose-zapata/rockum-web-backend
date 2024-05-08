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
        Schema::create('eternal', function (Blueprint $table) {
            $table->integer('eternal_id', true);
            $table->string('artista', 200)->default('');
            $table->string('imagen', 200)->default('');
            $table->string('fechabd', 100)->default('');
            $table->string('bandas', 100)->default('');
            $table->text('texto');
            $table->integer('fecha')->default(0);
            $table->text('video');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eternal');
    }
};
