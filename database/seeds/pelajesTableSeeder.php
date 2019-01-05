<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class pelajesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pelajes')->insert([
            ['pelaje' => 'esponjoso','activo'=>'S'],

            ['pelaje' => 'peludo','activo'=>'S'],

            ['pelaje' => 'pelado','activo'=>'S'],

            ['pelaje' => 'normal','activo'=>'S'],

            ['pelaje' => 'angora','activo'=>'S']

        ]);

    }
}
