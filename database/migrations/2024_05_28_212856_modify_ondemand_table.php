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
        Schema::table('ondemand', function (Blueprint $table) {
            $table->renameColumn('od_id', 'id');
            $table->renameColumn('fecha', 'fecha_number');
        });
        Schema::table('ondemand', function (Blueprint $table) {
            $table->timestamp('fecha')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ondemand', function (Blueprint $table) {
            $table->dropTimestamps();
            $table->dropColumn('fecha');
        });
        Schema::table('ondemand', function (Blueprint $table) {
            $table->renameColumn('fecha_number', 'fecha');
            $table->renameColumn('id', 'od_id');
        });
    }
};
