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
        Schema::create("Personnel",function(Blueprint $table){
            $table->id();
            $table->string("Nom");
            $table->string("Prenom");
            $table->string("Email");
            $table->string("CIN");
            $table->string("Adresse")->default("vide");
            $table->string("NumTel");
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("Personnel");
    }
};
