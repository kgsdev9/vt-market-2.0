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
        Schema::table('tlivraisons', function (Blueprint $table) {
            $table->unsignedBigInteger('livraison_id')->nullable();
            $table->foreign('livraison_id')->references('id')->on('livraisons')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tlivraisons', function (Blueprint $table) {
            //
        });
    }
};
