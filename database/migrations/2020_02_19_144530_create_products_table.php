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
            $table->bigIncrements('id')->nullable($value = false);
            $table->boolean('active')->nullable($value = true);
            $table->integer('article_number')->nullable($value = true);
            $table->string('title')->nullable($value = true);
            $table->text('summary')->nullable($value = true);
            $table->text('information')->nullable($value = true);
            $table->integer('producer_id')->nullable($value = true);
            $table->integer('stock')->nullable($value = true);
            $table->double('price')->nullable($value = true);
            $table->double('season_price')->nullable($value = true);
            $table->double('special_price')->nullable($value = true);
            $table->date('special_price_from')->nullable($value = true);
            $table->date('special_price_to')->nullable($value = true);
            $table->boolean('vegetarian')->nullable($value = true);
            $table->boolean('vegan')->nullable($value = true);
            $table->integer('calories')->nullable($value = true);
            $table->integer('categories_id')->nullable($value = false);
            $table->integer('producers_id')->nullable($value = false);
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
