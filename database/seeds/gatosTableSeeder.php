<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class gatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('gatos')->insert([
            ['nombre' => 'Esponjoso','id_raza'=>1,'id_color' => 1 , 'id_pelaje' => 1 , 'id_complexion' => 1, 'id_caracter' => 1,'activo'=>'S','id_tipo' => 1],
            ['nombre' => 'Lanita','id_raza'=>2,'id_color' => 2 , 'id_pelaje' => 2 , 'id_complexion' => 2, 'id_caracter' => 2,'activo'=>'S','id_tipo' => 2],
            ['nombre' => 'Serafina','id_raza'=>3,'id_color' => 3 , 'id_pelaje' => 3 , 'id_complexion' => 3, 'id_caracter' => 3,'activo'=>'S','id_tipo' => 3],
            ['nombre' => 'Negra','id_raza'=>4,'id_color' => 4 , 'id_pelaje' => 4 , 'id_complexion' => 3, 'id_caracter' => 4,'activo'=>'S','id_tipo' => 3],
            ['nombre' => 'plomo','id_raza'=>5,'id_color' => 5 , 'id_pelaje' => 5 , 'id_complexion' => 3, 'id_caracter' => 5,'activo'=>'S','id_tipo' => 1],

        ]);


    }
}
