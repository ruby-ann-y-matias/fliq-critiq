<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('en_EN');

        $limit = 20;

        for ($i = 0; $i < $limit;  $i++) {

            $user = new User();
            $user->name = $faker->name;
            $user->email = $faker->unique()->safeEmail;
            $user->username = $faker->unique()->userName;
            $user->password = bcrypt('abcdef');
            $user->birthdate = $faker->date($format = 'Y-m-d', $max = '2000-04-18');
            // $user->image = $faker->imageUrl($width = 300, $height = 300, 'cats');
            $user->image = 'img/avatar-mizu.jpg';
            $user->address = $faker->address;
            $user->phone = $faker->phoneNumber;
            $user->company = $faker->company;
            $user->job = $faker->jobTitle;
            $user->quote = $faker->realText(200, 2);
            $user->save();
        }
    }
}
