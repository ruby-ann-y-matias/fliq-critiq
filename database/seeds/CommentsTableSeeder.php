<?php

use Illuminate\Database\Seeder;
use App\Comment;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $flix = 102;

        for ($i = 1; $i <= $flix; $i++) {
        	$comment = new Comment();
        	$comment->comment = $faker->realText(200, 2);
        	$comment->user_id = $faker->numberBetween(1, 20);
        	$comment->flick_id = $i;
        	$comment->save();
        }
    }
}
