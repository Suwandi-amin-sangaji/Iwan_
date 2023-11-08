<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WaktuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('waktus')->insert([
            [
                'jam' => '07.00-08.00',
            ],
            [
                'jam' => '08.00-09.00',
            ],
            [
                'jam' => '09.00-10.00',
            ],
            [
                'jam' => '10.00-11.00',
            ],
            [
                'jam' => '11.00-12.00',
            ],
            [
                'jam' => '12.00-13.00',
            ],
            [
                'jam' => '13.00-14.00',
            ],
            [
                'jam' => '14.00-15.00',
            ],
            [
                'jam' => '15.00-16.00',
            ]

        ]);
    }
}
