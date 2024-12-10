<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
            Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Ensure you have the type_id column
            $table->foreignId('type_id')
            ->constrained('card_types')
            ->onDelete('cascade'); // or 'restrict' depending on your requirements
            $table->string('attribute')->nullable();
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
};
