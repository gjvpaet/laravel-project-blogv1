<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 100) as $index) {
            DB::table('posts')->insert([
                'title' => $faker->realText($maxNbChars = 10, $indexSize = 2), 
                'body' => $faker->realText($maxNbChars = 5000, $indexSize = 2), 
                'slug' => $faker->unique()->word,
                'created_at' => $faker->dateTimeThisYear($max = 'now'),
                'updated_at' => $faker->dateTimeThisYear($max = 'now')
            ]);
        }
    }
}
