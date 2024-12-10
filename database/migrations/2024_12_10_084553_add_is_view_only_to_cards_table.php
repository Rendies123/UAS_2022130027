<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsViewOnlyToCardsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('cards', function (Blueprint $table) {
            $table->boolean('is_view_only')->default(false); // Boolean column to indicate if the card is view-only
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('cards', function (Blueprint $table) {
            $table->dropColumn('is_view_only');
        });
    }
}
