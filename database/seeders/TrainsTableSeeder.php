<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            Train::create([
                'company' => $faker->word(),
                'departure_station' => $faker->words(3, true),
                'arrival_station' => $faker->words(3, true),
                'departure_time' => $faker->time(),
                'arrival_time' => $faker->time(),
                'train_code' => $faker->bothify('??-########'),
                'number_of_carriages' => rand(1, 20),
                'in_time' => $faker->boolean(),
                'cancelled' => $faker->boolean(),
            ]);
        }
    }
}