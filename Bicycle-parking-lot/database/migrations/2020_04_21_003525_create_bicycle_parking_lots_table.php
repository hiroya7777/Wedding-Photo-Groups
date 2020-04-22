<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBicycleParkingLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bicycle_parking_lots', function (Blueprint $table) {
            $table->bigIncrements('bicycle_parking_lots_id')->comment('駐輪場コード');
            $table->integer('company_id')->comment('事業者コード');
            $table->integer('line_id')->comment('路線コード');
            $table->integer('station_id')->comment('駅コード');
            $table->string('bicycle_parking_lots_name')->comment(' 駐輪場名');
            $table->integer('price')->comment('料金');
            $table->string('street_adress')->nullable()->comment('住所');
            $table->time('utilization_time')->nullable()->comment('利用時間');
            $table->time('reception_time')->nullable()->comment('受付時間');
            $table->integer('on_foot')->comment('徒歩');
            $table->string('image_name')->nullable()->comment('画像名');
            $table->string('image_url')->nullable()->comment('画像url');
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
        Schema::dropIfExists('bicycle_parking_lots');
    }
}
