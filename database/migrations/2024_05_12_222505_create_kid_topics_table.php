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
        Schema::create('kid_topics', function (Blueprint $table) {
            $table->id();
            $table->integer('fk_id_niño');
            $table->integer('fk_id_tema'); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kid_topics');
    }
};
