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
        Schema::create('boutiques', function (Blueprint $table) {
            $table->id();
            $table->string('libelle_boutique');
            $table->string('slug')->unique();
            $table->string('adresse');
            $table->string('logo_boutique');
            $table->string('nom_vendeur');
            $table->string('prenom_vendeur');
            $table->text('description');
            $table->string('telephone');
            $table->string('contact')->nullable();
            $table->string('piece');
            $table->boolean('status')->default('0');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boutiques');
    }
};
