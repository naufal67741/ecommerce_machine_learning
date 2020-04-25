<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i<12; $i++){
            $position = $i+1;
            $randomNumber = $faker->numberBetween($min=1,$max=20);
            DB::table('carts')->insert([
                'item_id'   =>  $faker->numberBetween($min=1,$max=87),
                'user_id'   =>  $faker->numberBetween($min=1,$max=10),
                'qty' => $faker->numberBetween($min=1,$max=20),
                'totalPrice' => $faker->numberBetween($min=1,$max=100)
            ]);
        }
    }
}
