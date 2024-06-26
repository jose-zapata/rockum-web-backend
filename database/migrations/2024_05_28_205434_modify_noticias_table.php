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
        //
        Schema::table('noticias', function (Blueprint $table) {
            $table->renameColumn('noticia_id', 'id');
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
        Schema::table('noticias', function (Blueprint $table) {
            $table->dropTimestamps();
            $table->dropColumn('fecha');
            $table->renameColumn('fecha_number', 'fecha');
            $table->renameColumn('id', 'noticia_id');
        });
    }
};
