<?php

use Illuminate\Database\Seeder;
use App\Follower;

class FollowersTableSeeder extends Seeder
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

            $followers = array();

	        for ($i = 1; $i <= 15; $i++) {

	        	$followers [] = $faker->numberBetween(1, 20);
	        }
        
        	foreach ($followers as $follower) {
	        	$influencer = new Follower();
		        $influencer->follower_id = $follower;
		        $influencer->user_id = $x;
		        $influencer->save();
        	}
    	}
	}
}
