<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $faker = Faker\Factory::create();

        $limit = 20;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('blogs')->insert([
                'tittle' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'author' => $faker->name,
                'content' => $faker->paragraph,
                'image' => $faker->imageUrl(159, 250, 'cats'),
            ]);
        }
    }
}
