<?php

use Illuminate\Database\Seeder;
use App\Panstwa;

class PanstwaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            $site = new Panstwa();
            $site->panstwo = $faker->city;
            $site->save();
        }
    }
}
