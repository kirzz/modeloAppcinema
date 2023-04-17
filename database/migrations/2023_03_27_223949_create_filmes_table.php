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
        //No create ele cria a tabela cadastro_filme_models.
        Schema::create('cadastro_filme_models', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_filme');
            $table->longText('atores_filme');
            $table->date('datalancamento_filme');
            $table->string('sinopse_filme');
            $table->string('capa_filme');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmes');
    }
};