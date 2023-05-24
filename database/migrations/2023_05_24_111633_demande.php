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
        Schema::create("Demande",function(Blueprint $table){
            $table->id();
            $table->foreignId("id_client");
            $table->string("prixTotal")->default(0);
            $table->string("Platform")->default("vide");
            $table->string("Needed")->default("vide");
            $table->string("Npage")->default("vide");
            $table->string("DegUI")->default("vide");
            $table->string("Features")->default("vide");
            $table->string("Services")->default("vide");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Demande');
    }
};
