<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class tipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tipo')->insert([
            ['tipo' => 'Silvestre'],

            ['tipo' => 'Callejero'],

            ['tipo' => 'Domestico']
        ]);

    }
}
