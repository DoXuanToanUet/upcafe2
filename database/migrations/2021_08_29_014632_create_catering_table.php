<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCateringTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
            Breakfast -
                1. Finger Food
                2. Buffet
                3. Setup
                4. Beverage
                5. Additional Options

            Tea -
                1. Main Options
                2. Beverage
                3. Savoury
                4. Sweet

            Lunch -
                1. Main Options
                2. Salad Options
                3. Sandwich Options
                4. Savoury Options
                5. Sweet Options

            Dinner -
                1. Main Options
                2. Beverage
                3. Setup
                4. Carvery
                5. Hot Option
                6. Sea Food
                7. Salad
                8. Sweet Options
        */

        Schema::create('catering', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('content')->nullable();
            $table->integer('group')->nullable();
            $table->double('price')->nullable();
            $table->string('grandparent');
            $table->tinyInteger('parent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catering');
    }
}
