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
        Schema::create('reserva', function (Blueprint $table) {
            $table->id();
            $table->foreignId('local_id')->constrained('locais')->onDelete('cascade'); 
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->dateTime('data_inicio'); 
            $table->dateTime('data_fim'); 
            $table->decimal('valor_total', 10, 2); 
            $table->enum('status', ['pendente', 'confirmada', 'cancelada'])->default('pendente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva');
    }
};
