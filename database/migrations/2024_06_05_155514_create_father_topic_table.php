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
        Schema::create('father_topic', function (Blueprint $table) {
            $table->id();

            $table->integer('fk_id_padre');
            $table->integer('fk_id_tema');
            $table->string('descripcion');

            $table->unsignedBigInteger('father_id')->nullable();
            $table->unsignedBigInteger('tema_id')->nullable();

            $table->foreign('father_id')->references('id')->on('fathers')->onDelete('cascade');
            $table->foreign('tema_id')->references('id')->on('temas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('father_topic');
    }
};
