<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            
            $table->string("company", 30);
            $table->string("departure_station", 30);
            $table->string("arrival_station", 30);
            $table->char("departure_time", 15);
            $table->char("arrival_time", 15);
            $table->char("train_Code", 11);
            $table->mediumInteger("number_of_carriages");
            $table->boolean("in_time");
            $table->boolean("cancelled");

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
        Schema::dropIfExists('trains');
    }
};