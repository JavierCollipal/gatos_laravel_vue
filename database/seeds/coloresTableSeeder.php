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
            ['color' => 'negro'],

            ['color' => 'naranjo'],

            ['color' => 'naranjoBlanco'],

            ['color' => 'naranjoBlancoNegro'],

            ['color' => 'plomo'],

            ['color' => 'blanco']
        ]);

    }
}
