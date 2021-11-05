<?php

use Illuminate\Database\Seeder;

class CategoriesTabbleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 20;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('categories')->insert([
                'category_name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'created_at' => date("Y/m/d"),
                'updated_at' => date("Y/m/d"),
            ]);
        }
    }
}
