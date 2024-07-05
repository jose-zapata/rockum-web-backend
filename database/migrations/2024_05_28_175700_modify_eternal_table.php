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
        Schema::table('eternal', function (Blueprint $table) {
            $table->renameColumn('eternal_id', 'id');
            $table->renameColumn('fecha', 'fecha_number');
        });
        Schema::table('eternal', function (Blueprint $table) {
            $table->timestamp('fecha')->nullable();
            $table->timestamp('fecha_comienzo')->nullable();
            $table->timestamp('fecha_fin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('eternal', function (Blueprint $table) {
            $table->dropTimestamps();
            $table->dropColumn('fecha_fin');
            $table->dropColumn('fecha_comienzo');
            $table->dropColumn('fecha');
        });
        Schema::table('eternal', function (Blueprint $table) {
            $table->renameColumn('fecha_number', 'fecha');
            $table->renameColumn('id', 'eternal_id');
        });
    }
};
