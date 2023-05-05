<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. crea Crete/alter
     */
    public function up(): void
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo',255);
            $table->text('cuerpo');
            $table->string('imagen, 255')->nullable();
            $table->unique('titulo');
            $table->bigInteger('autor')->unsigned();
        });
    }

    /**
     * Reverse the migrations. Borra tendremos los drop
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
