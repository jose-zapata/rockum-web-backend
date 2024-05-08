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
        Schema::create('request', function (Blueprint $table) {
            $table->integer('idr', true);
            $table->string('nombre', 250)->default('');
            $table->string('mail', 250)->default('');
            $table->string('artista', 250)->default('');
            $table->string('cancion', 250)->default('');
            $table->integer('fecha')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request');
    }
};
