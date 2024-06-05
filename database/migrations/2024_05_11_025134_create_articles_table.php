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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("nombre_articulo");
            $table->string("tipo_articulo");
            $table->double("costo");
            $table->string("desc_art");
            //foranea niño
            $table->unsignedBigInteger('store_id')->nullable();

            //referencia
            $table->foreign('store_id')->references('id')->on('store')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
