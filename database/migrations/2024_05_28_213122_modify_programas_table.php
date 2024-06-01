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
        Schema::table('programas', function (Blueprint $table) {
            $table->renameColumn('programa_id', 'id');
            $table->renameColumn('fechap', 'fecha_string');
            $table->timestamp('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('programas', function (Blueprint $table) {
            $table->dropTimestamps();
            $table->dropTimestamp('fecha');
            $table->renameColumn('fecha_string', 'fechap');
            $table->renameColumn('id', 'programa_id');
        });
    }
};
