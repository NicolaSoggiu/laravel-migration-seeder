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
                "company" => "Trenitalia",
                "departure_station" => "Rome", 
                "arrival_station" => "Milan",
                "departureTime" => "2023-06-28 10:00:00",
                "arrivalTime" => "2023-06-29 13:30;00",
                "train_Code" => "43532",
                "numberOfCarriages" => 6,
                "in_time" => true,
                "cancelled" => false,
            ],
            [
                "company" => "Italo",
                "departure_station" => "Rome", 
                "arrival_station" => "Naples",
                "departureTime" => "2023-06-28 10:00:00",
                "arrivalTime" => "2023-06-29 12:30:00",
                "train_Code" => "36275",
                "numberOfCarriages" => 5,
                "in_time" => false,
                "cancelled" => true,
            ],
        ];

        foreach($arrTrains as $train) {
            Train::create($train);
        }
    }
}