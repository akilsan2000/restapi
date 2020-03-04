<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //https://laravel.com/docs/5.8/migrations#creating-tables
        Schema::create('products', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->boolean('active');
        $table->integer('article_number');
        $table->string('title');
        $table->text('summary');
        $table->text('information');
        $table->integer('producer_id');
        $table->integer('stock');
        $table->double('price');
        $table->double('season_price');
        $table->double('special_price');
        $table->date('special_price_from');
        $table->date('special_price_to');
        $table->dateTime('date_created');
        $table->dateTime('date_modified');
        $table->boolean('vegetarian');
        $table->boolean('vegan');
        $table->integer('calories');
        $table->integer('categories_id');
        $table->integer('producers_id');
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
