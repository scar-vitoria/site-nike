<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(){

        Schema::create('tenis', function (Blueprint $table) {
            $table->id();
            $table->text("nome");
            $table->text("tipo");
            $table->text("marca");
            $table->text("cor");
            $table->text("descricao");
            $table->integer("tam");
            $table->decimal("preco");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenis');
    }
};
