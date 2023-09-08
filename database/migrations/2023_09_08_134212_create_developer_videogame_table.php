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
        Schema::create('developer_videogame', function (Blueprint $table) {

            $table->unsignedBigInteger('developer_id');
            $table->foreign('developer_id')->references('id')->on('developers');

            $table->unsignedBigInteger('videogame_id');
            $table->foreign('videogame_id')->references('id')->on('videogames');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developer_videogame');
    }
};
