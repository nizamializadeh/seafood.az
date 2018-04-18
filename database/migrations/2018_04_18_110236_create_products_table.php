<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name_az')->uniqe();
            $table->string('product_name_en')->uniqe();
            $table->string('product_name_ru')->uniqe();
            $table->string('product_details_az')->nullable();
            $table->string('product_details_en')->nullable();
            $table->string('product_details_ru')->nullable();
            $table->text('product_desc_az');
            $table->text('product_desc_en');
            $table->text('product_desc_ru');
            $table->string('product_image');
            $table->integer('price');
            $table->integer('product_cat_id')->unsigned()->index();
            $table->foreign('product_cat_id')->references('id')->on('product__categories')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
