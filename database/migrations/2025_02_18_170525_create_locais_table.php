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
        Schema::create('locais', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); 
            $table->text('descricao')->nullable(); 
            $table->string('endereco'); 
            $table->integer('capacidade'); 
            $table->decimal('preco_hora', 10, 2); 
            $table->string('imagem')->nullable(); 
            $table->enum('status', ['disponivel', 'indisponivel'])->default('disponivel'); 
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null'); 
            $table->foreignId('categoria_locais_id')->nullable()->constrained('categorias_locais')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locais');
    }
};
