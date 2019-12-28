<?php

use Illuminate\Database\Seeder;
use App\Bingelist;

class BingelistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($x = 1; $x <= 20; $x++) {

            $flicks = array();

	        for ($i = 1; $i <= 12; $i++) {

	        	$flicks [] = $faker->numberBetween(1, 102);
	        }
        
        	foreach ($flicks as $flick) {
	        	$bingelist = new Bingelist();
		        $bingelist->flick_id = $flick;
		        $bingelist->user_id = $x;
		        $bingelist->save();
        	}
        }
    }
}
