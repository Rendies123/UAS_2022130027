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
        Schema::create('card_collections', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); // Optional name for the collection
            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade');
            $table->text('description')->nullable(); // Optional description
            $table->timestamps();
        });

        // Optional: Pivot table for many-to-many relationship
        Schema::create('card_collection_card', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_collection_id')
                  ->constrained('card_collections')
                  ->onDelete('cascade');
            $table->foreignId('card_id')
                  ->constrained('cards')
                  ->onDelete('cascade');
            $table->integer('quantity')->default(1); // Optional quantity tracking
            $table->timestamps();

            // Prevent duplicate entries
            $table->unique(['card_collection_id', 'card_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_collection_card');
        Schema::dropIfExists('card_collections');
    }
};
