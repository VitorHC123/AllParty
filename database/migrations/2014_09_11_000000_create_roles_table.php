<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->unique();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    
        DB::table('roles')->insert([
            ['nome' => 'Pessoa'],
            ['nome' => 'Organizador'],
            ['nome' => 'Gerente'],
            ['nome' => 'Admin']
        ]);
    }
    
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
