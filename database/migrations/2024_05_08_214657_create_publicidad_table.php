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
        Schema::create('publicidad', function (Blueprint $table) {
            $table->integer('publicidad_id', true);
            $table->string('grupo', 100)->default('');
            $table->string('url', 250)->default('');
            $table->string('imagen', 250)->default('');
            $table->string('alt', 250)->default('');
            $table->string('ancho', 10)->default('');
            $table->string('alto', 10)->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicidad');
    }
};
