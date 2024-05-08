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
        Schema::create('mp3info', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('artista', 250)->default('');
            $table->string('titulo', 250)->default('');
            $table->string('ano', 20)->default('');
            $table->string('imagen', 250)->default('');
            $table->string('album', 250)->default('');
            $table->text('review');
            $table->integer('op1')->default(0);
            $table->integer('op2')->default(0);
            $table->integer('op3')->default(0);
            $table->integer('op4')->default(0);
            $table->integer('op5')->default(0);
            $table->integer('total')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mp3info');
    }
};
