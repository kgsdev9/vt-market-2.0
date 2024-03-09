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
        Schema::create('image_deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->unsignedBigInteger('livraison_id')->nullable();
            $table->foreign('livraison_id')->references('id')->on('livraisons')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_deliveries');
    }
};
