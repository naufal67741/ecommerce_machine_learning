<?php

use Illuminate\Database\Seeder;

class ClustersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, "name" => 'Cluster satu'],
            ['id' => 2, "name" => 'Cluster dua'],
            ['id' => 3, "name" => 'Cluster tiga'],
            ['id' => 4, "name" => 'Cluster empat'],
        ];

        foreach($data as $d){
            DB::table('clusters')->insert([
                'id' => $d['id'],
                'name' => $d['name']
            ]);
        }
    }
}
