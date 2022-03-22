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
                'user_id' => 1,
                'content' => $faker->paragraphs($nb = 10, $asText = true)   ,
                'created_at' => date("Y/m/d"),
                'updated_at' => date("Y/m/d"),
            ]);
        }
    }
}
