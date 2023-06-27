<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrTrains = [
            [
                "company" => "sdafasd",
                "departure_station" => "fdasfads", 
                "arrival_station" => "fadsfsa",
                "departureTime" => "",
                "arrivalTime" => "",
                "train_Code" => "das",
                "numberOfCarriages" => 6,
                "in_time" => true,
                "cancelled" => false,
            ],
            [
                "company" => "regrg",
                "departure_station" => "werre", 
                "arrival_station" => "gfsg",
                "departureTime" => "",
                "arrivalTime" => "",
                "train_Code" => "das",
                "numberOfCarriages" => 4,
                "in_time" => false,
                "cancelled" => true,
            ],
        ];

        foreach($arrTrains as $train) {
            Train::create($arrTrains);
        }
    }
}