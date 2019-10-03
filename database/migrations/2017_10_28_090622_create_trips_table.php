<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('from')->unsigned();
            $table->foreign('from')->references('id')->on('terminals');
            $table->integer('to')->unsigned();
            $table->foreign('to')->references('id')->on('terminals');
            $table->string('estimated_time');
            $table->integer('number_of_seats');
            $table->double('amount');
            $table->text('details');
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
        Schema::dropIfExists('trips');
    }
}
