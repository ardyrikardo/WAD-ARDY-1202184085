<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 20; $i++) { 
            \DB::table('products')->insert([
                'name' =>  $faker->sentence($nbWords = 3, $variableNbWords = true) ,
                'price' => $faker->numberBetween($min = 10000, $max = 90000),
                'description' => $faker->sentence($nbWords = 10, $variableNbWords = true),
                'stock' => $faker->numberBetween($min = 50, $max = 100),
            ]);
        }

    }
}
