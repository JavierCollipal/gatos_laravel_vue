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
            ['nombre' => 'Azul ruso'],

            ['nombre' => 'Gato Persa'],

            ['nombre' => 'Gato siames'],

            ['nombre' => 'Scottish Fold'],

            ['nombre' => 'Maine Coon']

        ]);
    }
}
