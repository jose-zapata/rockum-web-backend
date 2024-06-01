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
        //
        Schema::table('memorabilia', function (Blueprint $table) {
            $table->timestamp('fecha')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('memorabilia', function (Blueprint $table) {
            $table->integer('fecha')->change();
        });
    }
};
