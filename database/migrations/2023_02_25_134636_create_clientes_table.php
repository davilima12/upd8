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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 60);
            $table->string('cpf', 20);
            $table->date('data_nascimento');
            $table->string('endereco');
            $table->foreignId('estado_id')->constrained('estados');
            $table->foreignId('cidade_id')->constrained('cidades');
            $table->foreignId('sexo_id')->constrained('sexos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
