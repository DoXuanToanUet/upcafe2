<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('catering_id')->nullable();
            $table->string('name');
            $table->text('content')->nullable();
            $table->unsignedSmallInteger('quantity')->nullable();
            $table->unsignedDecimal('price', 8, 2)->nullable();
            $table->string('grandparent');
            $table->unsignedBigInteger('parent');
            $table->unsignedTinyInteger('vegetarian')->nullable();
            $table->unsignedTinyInteger('gluten')->nullable();
            $table->unsignedTinyInteger('vegan')->nullable();
            $table->timestamps();

            $table->foreign('catering_id')->references('id')->on('catering')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
