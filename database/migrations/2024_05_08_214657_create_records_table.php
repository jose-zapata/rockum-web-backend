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
        Schema::create('records', function (Blueprint $table) {
            $table->integer('record_id', true)->unique('record_id');
            $table->string('caratula', 200);
            $table->string('album', 200)->default('');
            $table->string('banda', 200);
            $table->string('condicion', 200);
            $table->string('codigo', 250);
            $table->string('lanzamiento', 200);
            $table->string('comprar', 200);
            $table->string('Formato', 200);
            $table->string('paypal', 500);
            $table->string('precio', 200);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
