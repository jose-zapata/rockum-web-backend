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
        Schema::table('cometarios', function (Blueprint $table) {
            $table->renameColumn('idc', 'id');
            $table->renameColumn('fecha', 'fecha_number');
            $table->timestamp('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cometarios', function (Blueprint $table) {
            $table->dropTimestamps();
            $table->dropTimestamp('fecha');
            $table->renameColumn('id', 'idc');
            $table->renameColumn('fecha_number', 'fecha');
        });
    }
};
