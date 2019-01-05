<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class coloresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('colores')->insert([
            ['color' => 'negro','activo'=>'S'],

            ['color' => 'naranjo','activo'=>'S'],

            ['color' => 'naranjoBlanco','activo'=>'S'],

            ['color' => 'naranjoBlancoNegro','activo'=>'S'],

            ['color' => 'plomo','activo'=>'S'],

            ['color' => 'blanco','activo'=>'S']
        ]);

    }
}
