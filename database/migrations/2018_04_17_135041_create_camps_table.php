<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('camp_title_az');
            $table->string('camp_title_en');
            $table->string('camp_title_ru');
            $table->text('camp_desc_az');
            $table->text('camp_desc_en');
            $table->text('camp_desc_ru');
            $table->string('camp_image');
            $table->timestamp('date');
            $table->string('time');
            $table->string('location');
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
        Schema::dropIfExists('camps');
    }
}
