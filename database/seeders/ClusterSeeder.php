<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClusterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clusters')->insert([
            [
                'nama_cluster' => 'Cluster 1',
            ],
            [
                'nama_cluster' => 'Cluster 2'
            ],
            [
                'nama_cluster' => 'Cluster 3'
            ],
            [
                'nama_cluster' => 'Cluster 4'
            ]
        ]);
    }
}
