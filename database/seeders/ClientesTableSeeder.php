<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert ([
        
          [

           'razon_social' => 'Coca cola'
           ,'rfc' => 'COCAABC050'
           ,'contacto' =>  'Ing Kevin'
           ,'numero_celular' => '7223550036'
           ,'url'  => 'https://coca-cola/'
           ,'regimen_fiscal' => 'Sociedad Anonima de capital variable'
           ,'created_at' => '2022-09-10 12:48:00'
           ,'updated_at'  => '2022-09-10 12:48:00'
          ]
,
          [
            
            'razon_social' => 'Pepsi'
             ,'rfc' => 'COCAABC050'
             ,'contacto' =>  'Ing Itzel'
             ,'numero_celular' => '7223550036'
             ,'url'  => 'https://pepsi.com/'
             ,'regimen_fiscal' => 'Sociedad Anonima de capital variable'
             ,'created_at' => '2022-09-10 12:48:00'
             ,'updated_at'  => '2022-09-10 12:48:00'
            ]

            ,
          [
            
            'razon_social' => 'Fanta'
             ,'rfc' => 'COCAABC050'
             ,'contacto' =>  'Ing Saira'
             ,'numero_celular' => '7223550036'
             ,'url'  => 'https://fanta.com/'
             ,'regimen_fiscal' => 'Sociedad Anonima de capital variable'
             ,'created_at' => '2022-09-10 12:48:00'
             ,'updated_at'  => '2022-09-10 12:48:00'
            ]

            ,
          [
            
            'razon_social' => 'Sabritas'
             ,'rfc' => 'COCAABC050'
             ,'contacto' =>  'Ing Kevin'
             ,'numero_celular' => '7223550036'
             ,'url'  => 'https://coca-cola/'
             ,'regimen_fiscal' => 'Sociedad Anonima de capital variable'
             ,'created_at' => '2022-09-10 12:48:00'
             ,'updated_at'  => '2022-09-10 12:48:00'
            ]
          

        ]);

        }
}
