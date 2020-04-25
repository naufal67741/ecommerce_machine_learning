<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<10;$i++){
            $position = $i+1;
            DB::table('users')->insert([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => $faker->password(),
                'image' => 'gambar'.$position.'.jpg',
                'phone' => $faker->numberBetween($min=100000,$max=999999),
                'cluster_id' => $faker->numberBetween($min=1,$max=4),
            ]);
        }
    }
}
