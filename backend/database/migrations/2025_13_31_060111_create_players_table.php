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
        Schema::create('tb_player', function (Blueprint $table) {
            $table->id('id_player');
            $table->string('player_name');
            $table->unsignedBigInteger('position_id');
            $table->string('skill');
            $table->timestamps();

            $table->foreign('position_id')->references('id_position')->on('tb_position')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
