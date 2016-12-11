<?php

use Illuminate\Database\Seeder;
use App\Sites;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i=0; $i < 100; $i++) {
        $site= new Sites();
        $site->title=$faker->city;
        $site->content=$faker->text(200);
        $site->category_id= rand(1,9);
        $site->save();
        }
    }
}
