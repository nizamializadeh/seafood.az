<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('blog_title_az');
            $table->string('blog_title_en');
            $table->string('blog_title_ru');
            $table->text('blog_text_az');
            $table->text('blog_text_en');
            $table->text('blog_text_ru');
            $table->string('blog_image');
            $table->text('keywords');
            $table->integer('count');
            $table->integer('blog_cat_id')->unsigned()->index();
            $table->foreign('blog_cat_id')->references('id')->on('blog_categories')->onDelete('cascade');
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
        Schema::dropIfExists('blogs');
    }
}
