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
        Schema::create('programas', function (Blueprint $table) {
            $table->integer('programa_id', true);
            $table->string('nombre', 250)->default('');
            $table->string('tamano', 100)->default('');
            $table->string('fechap', 100)->default('');
            $table->string('imagen', 250)->default('');
            $table->string('enlace', 250)->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programas');
    }
};
