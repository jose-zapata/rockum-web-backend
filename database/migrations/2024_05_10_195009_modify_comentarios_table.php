<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('comentarios', function (Blueprint $table) {
            $table->renameColumn('idc', 'id');
            $table->renameColumn('fecha', 'fecha_number');
        });
        Schema::table('comentarios', function (Blueprint $table) {
            $table->timestamp('fecha')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comentarios', function (Blueprint $table) {
            $table->dropTimestamps();
            $table->dropColumn('fecha');
            $table->renameColumn('id', 'idc');
            $table->renameColumn('fecha_number', 'fecha');
        });
    }
};
