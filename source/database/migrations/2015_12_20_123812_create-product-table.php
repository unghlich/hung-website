<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTable extends Migration
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
            $table->timestamps();
            $table->softDeletes();
            $table->string('name');
            $table->integer('price');
            $table->integer('ratePoints');
            $table->integer('rateTimes');
            $table->string('thumbnail');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->text('descriptionTitle');
            $table->longText('descriptionContent');
            $table->integer('categoryId');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
