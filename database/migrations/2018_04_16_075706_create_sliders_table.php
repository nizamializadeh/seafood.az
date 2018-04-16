<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slider_title_az')->nulled();
            $table->string('slider_title_en')->nulled();
            $table->string('slider_title_ru')->nulled();
            $table->string('slider_desc_az')->nulled();
            $table->string('slider_desc_en')->nulled();
            $table->string('slider_desc_ru')->nulled();
            $table->string('slider_image');
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
        Schema::dropIfExists('sliders');
    }
}
