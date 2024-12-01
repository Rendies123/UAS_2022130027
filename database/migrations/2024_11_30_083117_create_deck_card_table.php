<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_deck_card_table.php
    public function up()
    {
        Schema::create('deck_card', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deck_id');
            $table->unsignedBigInteger('card_id');
            $table->timestamps();
            
            $table->foreign('deck_id')->references('id')->on('decks')->onDelete('cascade');
            $table->foreign('card_id')->references('id')->on('cards')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deck_card');
    }
};
