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
        Schema::create('kid_topic', function (Blueprint $table) {
            $table->id();
            $table->integer('descripcion');
            
            $table->unsignedBigInteger('kid_id')->nullable();
            $table->unsignedBigInteger('tema_id')->nullable();

            $table->foreign('kid_id')->references('id')->on('kids')->onDelete('cascade');
            $table->foreign('tema_id')->references('id')->on('temas')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kid_topic');
    }
};
