<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitikSelamSeeder extends Seeder
{
    public function run()
    {
        // Cluster 1
        DB::table('titik_selams')->insert([
            [
                'nama' => 'Macro rock or Grouper net',
                'cluster_id' => 1
            ],
            [
                'nama' => 'Three rocks',
                'cluster_id' => 1
            ],
            [
                'nama' => 'Razorback rock',
                'cluster_id' => 1
            ],
            [
                'nama' => 'Cave and wall (farondi cave)',
                'cluster_id' => 1
            ],
            [
                'nama' => 'Pet Rock',
                'cluster_id' => 1
            ],
            [
                'nama' => 'Love Potion number nine',
                'cluster_id' => 1
            ],
            [
                'nama' => 'No contest',
                'cluster_id' => 1
            ],
            [
                'nama' => 'Plateau',
                'cluster_id' => 1
            ],
            [
                'nama' => 'Gorgonian passage (neptune fan sea)',
                'cluster_id' => 2
            ],
            [
                'nama' => 'Baraccuda Rock',
                'cluster_id' => 2
            ],
            [
                'nama' => 'Small World',
                'cluster_id' => 2
            ],
            [
                'nama' => 'Wedding Cake',
                'cluster_id' => 2
            ],
            [
                'nama' => 'Elephant Wall',
                'cluster_id' => 2
            ],
            [
                'nama' => 'Four King',
                'cluster_id' => 2
            ],
            [
                'nama' => 'Orange peel',
                'cluster_id' => 2
            ],
            [
                'nama' => 'Tobleron',
                'cluster_id' => 2
            ],
            [
                'nama' => 'Blue Hole',
                'cluster_id' => 2
            ],
            [
                'nama' => 'Kaleidoscope',
                'cluster_id' => 2
            ],
            [
                'nama' => 'Pele Playground',
                'cluster_id' => 2
            ],
            [
                'nama' => '2 For 2 ',
                'cluster_id' => 2
            ],
            [
                'nama' => 'Yellit Kecil',
                'cluster_id' => 3
            ],
            [
                'nama' => 'Boo Window',
                'cluster_id' => 3
            ],
            [
                'nama' => 'Boo East(cape Boo)',
                'cluster_id' => 3
            ],
            [
                'nama' => 'Romeo',
                'cluster_id' => 3
            ],
            [
                'nama' => 'Tank Rock',
                'cluster_id' => 3
            ],
            [
                'nama' => 'Nudi Rock',
                'cluster_id' => 3
            ],
            [
                'nama' => 'Whale Rock',
                'cluster_id' => 3
            ],
            [
                'nama' => 'Potato Point(east kalig)',
                'cluster_id' => 3
            ],
            [
                'nama' => 'Boo West ',
                'cluster_id' => 3
            ],
            [
                'nama' => 'Fiabacet',
                'cluster_id' => 3
            ],
            [
                'nama' => 'Eagle Nest',
                'cluster_id' => 3
            ],
            [
                'nama' => 'Magic Mountain (karang bayangan)',
                'cluster_id' => 3
            ],
            [
                'nama' => 'Puri Pinnacle',
                'cluster_id' => 3
            ],
            [
                'nama' => 'Andiamo',
                'cluster_id' => 4
            ],
            [
                'nama' => 'Color Color',
                'cluster_id' => 4
            ],
            [
                'nama' => 'Candy Store',
                'cluster_id' => 4
            ],
            [
                'nama' => "Andy's Ultimate",
                'cluster_id' => 4
            ],
            [
                'nama' => 'Black Rock ',
                'cluster_id' => 4
            ],
        ]);

    }
}
