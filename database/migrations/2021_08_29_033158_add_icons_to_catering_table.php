<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIconsToCateringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catering', function (Blueprint $table) {
            $table->boolean('vegetarian')->nullable();
            $table->boolean('gluten')->nullable();
            $table->boolean('vegan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catering', function (Blueprint $table) {
            $table->dropColumn('vegetarian');
            $table->dropColumn('gluten');
            $table->dropColumn('vegan');
        });
    }
}
