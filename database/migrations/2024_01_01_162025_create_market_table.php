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
<<<<<<<< HEAD:database/migrations/2024_01_01_162025_create_market_table.php
        Schema::create('market', function (Blueprint $table) {
            $table->id();
========
        Schema::create('store', function (Blueprint $table) {
            $table->id();
            $table -> string('name');
            $table -> string('desc');
>>>>>>>> f09df22f98bb1bf089dd90b4bf3f9742ec7e0388:database/migrations/2024_06_05_153145_create_store_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<<< HEAD:database/migrations/2024_01_01_162025_create_market_table.php
        Schema::dropIfExists('market');
========
        Schema::dropIfExists('store');
>>>>>>>> f09df22f98bb1bf089dd90b4bf3f9742ec7e0388:database/migrations/2024_06_05_153145_create_store_table.php
    }
};
