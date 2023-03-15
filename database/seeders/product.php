<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[[
            'id' => 1111,
            'nama' => 'Baju',
            'status' => 'Lelang'
        ],
        [
            'id' => 2222,
            'nama' => 'Celana',
            'status' => 'Lelang'
        ],
        [
            'id' => 3333,
            'nama' => 'Jaket',
            'status' => 'Lelang'
        ],
        [
            'id' => 4444,
            'nama' => 'Sweater',
            'status' => 'Lelang'
        ],
        [
            'id' => 5555,
            'nama' => 'Topi',
            'status' => 'Lelang'
        ],
        [
            'id' => 6666,
            'nama' => 'Hoodie',
            'status' => 'Lelang'
        ],
        [
            'id' => 7777,
            'nama' => 'Sepatu',
            'status' => 'Lelang'
        ]];
        DB::table('product')->insert($data);

    }
}
