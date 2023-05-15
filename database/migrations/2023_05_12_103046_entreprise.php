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
        Schema::create("Entreprise",function(Blueprint $table){
            $table->id();
            $table->string("NomEntreprise");
            $table->bigInteger("RC");
            $table->bigInteger("Patente");
            $table->bigInteger("IF");
            $table->bigInteger("ICE");
            $table->string("Adresse");
            $table->string("SiteWeb");
            $table->string("NomPersonnel");
            $table->string("ResponsableDuService");
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Entreprise');
    }
};
