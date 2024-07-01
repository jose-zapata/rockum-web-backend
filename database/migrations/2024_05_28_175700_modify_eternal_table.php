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
            $table->timestamp('fecha');
            $table->timestamp('fecha_comienzo');
            $table->timestamp('fecha_fin');
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
            $table->dropTimestamp('fecha_fin');
            $table->dropTimestamp('fecha_comienzo');
            $table->dropTimestamp('fecha');
            $table->renameColumn('fecha_number', 'fecha');
            $table->renameColumn('id', 'eternal_id');
        });
    }
};
