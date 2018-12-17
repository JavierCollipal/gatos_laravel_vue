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
            ['caracter' => 'Flojo'],
            ['caracter' => 'Rabioso'],
            ['caracter' => 'Tierno'],
            ['caracter' => 'Jugueton'],
            ['caracter' => 'Dormilon']
        ]);

    }
}
