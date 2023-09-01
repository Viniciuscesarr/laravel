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
        Schema::create('conta_clientes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("cliente_id")->unsigned();
            $table->foreign("cliente_id")->references("id")->on("cliente");
            $table->bigInteger("produto_id")->unsigned();
            $table->foreign("produto_id")->references("id")->on("produtos");
            $table->decimal("valor",10,2);
            $table->boolean("pago")->default(false);
            $table->date("data_pagamento")->default(null);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conta_clientes');
    }
};
