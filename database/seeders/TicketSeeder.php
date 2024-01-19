<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fechaActual = new \DateTime();
        DB::table('tickets')->insert([
            [
                'date' => $fechaActual->format('Y-m-d'),
                'price' => 10,
                'train_id' => 1,
                'ticket_type_id' => 1
            ],
            [
                'date' => $fechaActual->format('Y-m-d'),
                'price' => 10,
                'train_id' => 2,
                'ticket_type_id' => 2
            ],
            [
                'date' => $fechaActual->format('Y-m-d'),
                'price' => 10,
                'train_id' => 3,
                'ticket_type_id' => 3
            ]
        ]);
    }
}
