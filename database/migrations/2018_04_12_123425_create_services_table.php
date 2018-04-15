<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serv_title_az');
            $table->string('serv_title_en');
            $table->string('serv_title_ru');
            $table->text('serv_desc_az');
            $table->text('serv_desc_en');
            $table->text('serv_desc_ru');
            $table->string('serv_image');
            $table->string('serv_icon');
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
        Schema::dropIfExists('services');
    }
}
