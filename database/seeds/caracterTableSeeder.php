<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class caracterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('caracter')->insert([
            ['caracter' => 'Flojo','activo'=>'S'],
            ['caracter' => 'Rabioso','activo'=>'S'],
            ['caracter' => 'Tierno','activo'=>'S'],
            ['caracter' => 'Jugueton','activo'=>'S'],
            ['caracter' => 'Dormilon','activo'=>'S']
        ]);

    }
}
