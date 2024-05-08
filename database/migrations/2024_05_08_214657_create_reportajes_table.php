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
        Schema::create('reportajes', function (Blueprint $table) {
            $table->integer('reportaje_id', true);
            $table->string('titulo', 200);
            $table->string('imagen', 250);
            $table->string('imagen2', 250);
            $table->string('website', 200);
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
        Schema::dropIfExists('reportajes');
    }
};
