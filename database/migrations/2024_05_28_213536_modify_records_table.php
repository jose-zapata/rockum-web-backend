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
        Schema::table('records', function (Blueprint $table) {
            $table->renameColumn('record_id', 'id');
            $table->renameColumn('Formato', 'formato');
            $table->timestamp('fecha')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('records', function (Blueprint $table) {
            $table->renameColumn('id', 'record_id');
            $table->renameColumn('formato', 'Formato');
            $table->dropColumn('fecha');
            $table->dropTimestamps();
        });
    }
};
