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
        Schema::create('ondemand', function (Blueprint $table) {
            $table->integer('od_id', true);
            $table->text('artista')->default('');
            $table->string('cancion', 250)->default('');
            $table->string('enlace', 200)->default('');
            $table->string('imagen')->default('');
            $table->text('review')->default('');
            $table->integer('fecha')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ondemand');
    }
};
