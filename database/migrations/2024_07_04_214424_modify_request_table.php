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
        Schema::table('request', function (Blueprint $table) {
            $table->renameColumn('idr', 'id');
            $table->renameColumn('fecha', 'fecha_numero');
        });
        Schema::table('request', function (Blueprint $table) {
            $table->timestamp('fecha')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('request', function (Blueprint $table) {
            $table->dropTimestamps();
            $table->dropColumn('fecha');
        });
        Schema::table('request', function (Blueprint $table) {
            $table->renameColumn('id', 'idr');
            $table->renameColumn('fecha_numero', 'fecha');
        });
    }
};
