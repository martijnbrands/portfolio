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

            $title = $faker->sentence;

              DB::table('posts')->insert([
                'title' => $title,
                'description' => $faker->text($maxNbChars = 600),
                'color' => $faker->hexcolor,
                'slug' => str_slug($title)
            ]);
        }	
	       
    }
}
