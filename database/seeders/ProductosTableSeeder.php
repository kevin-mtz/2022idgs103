<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            [
             'producto'=>'Sabritas' 
             ,'descripcion'=>'Sabritas Originales' 
             ,'precio'=>'15.20' 
             ,'existencias'=>'12' 
             ,'fotografia'=>'foto.jpg' 
             ,'taza_iva'=>'10.50' 
             ,'created_at'=>'2022-09-10 12:48:00' 
             ,'updated_at'=>'2022-09-10 12:48:00' 
            ],
            [
             'producto'=>'Coca' 
             ,'descripcion'=>'Coca de 250' 
             ,'precio'=>'10.40' 
             ,'existencias'=>'23' 
             ,'fotografia'=>'fotito.jpg' 
             ,'taza_iva'=>'13.09' 
             ,'created_at'=>'2022-09-10 12:48:00' 
             ,'updated_at'=>'2022-09-10 12:48:00' 
            ],
            [
             'producto'=>'Maruchan' 
             ,'descripcion'=>'Maruchan de camaron' 
             ,'precio'=>'15.60' 
             ,'existencias'=>'34' 
             ,'fotografia'=>'ma.jpg' 
             ,'taza_iva'=>'2.09' 
             ,'created_at'=>'2022-09-10 12:48:00' 
             ,'updated_at'=>'2022-09-10 12:48:00' 
            ],
            [
             'producto'=>'Carlos Quinto' 
             ,'descripcion'=>'Carloquiento de 43g' 
             ,'precio'=>'10.90' 
             ,'existencias'=>'34' 
             ,'fotografia'=>'carlos.jpg' 
             ,'taza_iva'=>'10.09' 
             ,'created_at'=>'2022-09-10 12:48:00' 
             ,'updated_at'=>'2022-09-10 12:48:00' 
            ]
 
         ]);
        }
}