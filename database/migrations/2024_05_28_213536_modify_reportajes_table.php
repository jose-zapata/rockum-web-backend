<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('reportajes', function (Blueprint $table) {
            $table->renameColumn('reportaje_id', 'id');
            $table->renameColumn('fecha', 'fecha_numero');
        });
        Schema::table('reportajes', function (Blueprint $table) {
            $table->timestamp('fecha')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reportajes', function (Blueprint $table) {
            $table->dropColumn('fecha');
            $table->dropTimestamps();
        });
        Schema::table('reportajes', function (Blueprint $table) {
            $table->renameColumn('id', 'reportaje_id');
            $table->renameColumn('fecha_numero', 'fecha');
        });
    }
};
