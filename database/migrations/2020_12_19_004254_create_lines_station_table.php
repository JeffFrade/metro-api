<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinesStationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lines_station', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_station')->unsigned();
            $table->bigInteger('id_line')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_station')
                ->references('id')
                ->on('stations');

            $table->foreign('id_line')
                ->references('id')
                ->on('lines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lines_station');
    }
}
