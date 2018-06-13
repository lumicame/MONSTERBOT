<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDateSheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('date_shedule', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('date_id');
            $table->foreign('date_id')->references('id')->on('dates')->onDelete('cascade');
            $table->unsignedInteger('shedule_id');
            $table->foreign('shedule_id')->references('id')->on('shedules')->onDelete('cascade');
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
        Schema::dropIfExists('date_shedule');
    }
}
