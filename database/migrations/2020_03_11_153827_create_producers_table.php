<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producers', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigIncrements('id')->nullable($value = false);
            $table->string('producer_name')->nullable($value = true);
=======
            $table->increments('id');
            $table->string('last_name')->nullable($value = true);
>>>>>>> ec51080f1f460c5fe7aa17f87c1eb6ba90c7afa7
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
        Schema::dropIfExists('producers');
    }
}
