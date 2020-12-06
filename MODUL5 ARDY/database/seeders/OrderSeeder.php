<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 5; $i++) { 
            \DB::table('orders')->insert([
                'product_id' => $faker->numberBetween($min = 44, $max = 63),
                'amount' => $faker->numberBetween($min = 1, $max = 5),
                'buyer_name' =>  $faker->name,
                'buyer_contact' =>  $faker->e164PhoneNumber 
            ]);
        }
    }
}
