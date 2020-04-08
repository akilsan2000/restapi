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
            $table->boolean('active')->nullable($value = true);
            $table->integer('article_number')->nullable($value = true);
            $table->string('title')->nullable($value = true);
            $table->text('summary')->nullable($value = true);
            $table->text('information')->nullable($value = true);
            $table->integer('stock')->nullable($value = true);
            $table->double('price')->nullable($value = true);
            $table->double('season_price')->nullable($value = true);
            $table->double('special_price')->nullable($value = true);
            $table->date('special_price_from')->nullable($value = true);
            $table->date('special_price_to')->nullable($value = true);
            $table->boolean('vegetarian')->nullable($value = true);
            $table->boolean('vegan')->nullable($value = true);
            $table->integer('calories')->nullable($value = true);
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('producer_id');
            $table->timestamps();
        });
    
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('producer_id')->references('id')->on('producers');
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
