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
            
            $table->char("company", 15);
            $table->char("departure_station", 30);
            $table->char("arrival_station", 30);
            $table->date("departureTime");
            $table->date("arrivalTime");
            $table->char("train_Code", 5);
            $table->mediumInteger("numberOfCarriages");
            $table->mediumInteger("in_time");
            $table->mediumInteger("cancelled");

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