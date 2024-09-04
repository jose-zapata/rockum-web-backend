<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('entrevistas', function (Blueprint $table) {
            $table->renameColumn('entrevista_id', 'id');
            $table->renameColumn('fecha', 'fecha_number');
        });
        Schema::table('entrevistas', function (Blueprint $table) {
            $table->timestamps();
            $table->timestamp('fecha')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('entrevistas', function (Blueprint $table) {
            $table->dropColumn('fecha');
            $table->dropTimestamps();
        });

        Schema::table('entrevistas', function (Blueprint $table) {
            $table->renameColumn('id', 'entrevista_id');
            $table->renameColumn('fecha_number', 'fecha');
        });
    }
};
