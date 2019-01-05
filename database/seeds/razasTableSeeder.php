<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class razasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('razas')->insert([
            ['raza' => 'Azul ruso','activo'=>'S'],

            ['raza' => 'Gato Persa','activo'=>'S'],

            ['raza' => 'Gato siames','activo'=>'S'],

            ['raza' => 'Scottish Fold','activo'=>'S'],

            ['raza' => 'Maine Coon','activo'=>'S']

        ]);
    }
}
