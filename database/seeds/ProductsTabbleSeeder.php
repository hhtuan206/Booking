<?php

use Illuminate\Database\Seeder;

class ProductsTabbleSeeder extends Seeder
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
            DB::table('products')->insert([
                'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'description' => $faker->paragraph,
                'price' => $faker->numberBetween($min = 1500, $max = 6000),
                'stock' => $faker->randomDigit,
                'created_at' => date("Y/m/d"),
                'updated_at' => date("Y/m/d"),
            ]);
        }
    }
}
