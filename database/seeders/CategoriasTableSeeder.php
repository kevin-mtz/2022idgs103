<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert ([
            [
                'categoria'=> 'Marinela'
            ],
            [
                'categoria'=> 'Bimbo'
            ],
            [
                'categoria'=> 'Barcel'
            ],
            [
                'categoria'=> 'Ricolino'
            ],
            [
                'categoria'=> 'Tia Rosa'
            ]
        ]);
    }
}
