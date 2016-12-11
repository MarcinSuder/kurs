<?php

use Illuminate\Database\Seeder;
use App\Countrys;

class CountrysTableSeeder extends Seeder
{

    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=0; $i < 50; $i++) {
            $site = new Countrys();
            $site->countrys = $faker->country;
            $site->save();
        }
    }
}
