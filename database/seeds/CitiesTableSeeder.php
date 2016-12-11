<?php

use Illuminate\Database\Seeder;
use App\Cities;

class CitiesTableSeeder extends Seeder
{

    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            $city = new Cities();
            $city->cities = $faker->city;
            $city->id_countrys = 1;
            $city->save();
        }
    }
}
