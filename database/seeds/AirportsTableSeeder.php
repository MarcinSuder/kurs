<?php

use Illuminate\Database\Seeder;
use App\Airports;

class AirportsTableSeeder extends Seeder
{

    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            $airport = new Airports();
            $airport->airports = $faker->city;
            $airport->id_cities = 2;
            $airport->id_countrys = 1;
            $airport->save();
        }
    }
}
