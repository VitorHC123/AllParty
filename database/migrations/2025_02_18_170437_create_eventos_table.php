<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();  
            $table->string('nome');
            $table->text('descricao')->nullable();
            $table->string('local');
            $table->integer('quantidade_pessoas');
            $table->dateTime('data_inicio');
            $table->dateTime('data_fim');
            $table->string('imagem')->nullable();
            $table->enum('status', ['pendente', 'aprovado', 'rejeitado'])->default('pendente');
            
           
            $table->foreignId('categoria_evento_id')->constrained('categorias_eventos')->onDelete('cascade')->unsigned();
            
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
            $table->engine = 'InnoDB'; 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
