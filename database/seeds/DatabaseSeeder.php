<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
    	for ($i=0; $i < 10; $i++) {
  			DB::table('posts')->insert([

				'title' => $faker->sentence,
	            'description' => $faker->text($maxNbChars = 600),
	            'color' => $faker->hexcolor,
	            'thumbnail' => $faker->imageUrl($width = 640, $height = 480),
			]);
		}		
	       
    }
}
