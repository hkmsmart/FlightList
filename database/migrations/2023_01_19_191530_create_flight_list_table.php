<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_list', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('captain_id');
            $table->string('code');
            $table->dateTime('schedule_date');
            $table->string('origin');
            $table->string('destination');
            $table->boolean('status')->default(false)->comment('true:Done, Planned:false');

            $table->foreign('captain_id')->references('id')->on('captains');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_list');
    }
}
