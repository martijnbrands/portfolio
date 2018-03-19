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
        DB::table('users')->insert([
            'name' => 'Martijn Brands',
            'email' => 'martijn@portfolio.nl',
            'password' => bcrypt('4&Q5Vhgh6H6+c_=%')
        ]);

    	$faker = Faker\Factory::create();
    	for ($i=0; $i < 10; $i++) {

            $title = $faker->sentence;

              DB::table('posts')->insert([
                'title' => $title,
                'description' => $faker->text($maxNbChars = 600),
                'color' => $faker->hexcolor,
                'textColor' => $faker->hexcolor,
                'slug' => str_slug($title)
            ]);
        }	
	       
    }
}
