<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("city_name");
            $table->string("country");
            $table->string("lat");
            $table->string("lan");
            $table->string("observation_time");
            $table->string("temperature");
            $table->string("wind_speed");
            $table->string("wind_degree");
            $table->string("wind_dir");
            $table->string("pressure");
            $table->string("humidity");

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
        Schema::dropIfExists('weather_reports');
    }
}
