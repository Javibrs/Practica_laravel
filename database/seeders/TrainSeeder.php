<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'name' => 'AVE',
                'passengers' => 100,
                'year' => 2022,
                'train_type_id' => 1
            ],
            [
                'name' => 'Tren bala',
                'passengers' => 150,
                'year' => 2012,
                'train_type_id' => 3
            ],
            [
                'name' => 'Underwater',
                'passengers' => 200,
                'year' => 2023,
                'train_type_id' => 2
            ]
        ]);
    }
}
