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
        Schema::table('multimedia', function (Blueprint $table) {
            $table->renameColumn('multimedia_id', 'id');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('multimedia', function (Blueprint $table) {
            $table->dropTimestamps();
            $table->renameColumn('id', 'multimedia_id');
        });
    }
};
