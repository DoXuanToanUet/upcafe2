<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
            1 = index banner
            2 = index cafe
            3 = index catering
            4 = cafe banner
            5 = catering banner
            6 = Gallery
        */
        Schema::create('banner', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('title')->nullable();
            $table->string('page');
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
        Schema::dropIfExists('banner');
    }
}
