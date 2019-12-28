<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = ['Action', 'Anime', 'Asian', 'British', 'Comedy', 'Crime', 'Documentary', 'Drama', 'Horror', 'Kids', 'Mystery', 'Reality Show', 'Romance', 'Sci-Fi & Fantasy', 'Thriller'];

        foreach ($options as $option) {

        	$genre = new Genre();
        	$genre->genre = $option;
        	$genre->save();
        }
    }
}
