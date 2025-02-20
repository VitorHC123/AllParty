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
        Schema::create('categorias_locais', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); 
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
        
        
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias_locais');
    }
};
