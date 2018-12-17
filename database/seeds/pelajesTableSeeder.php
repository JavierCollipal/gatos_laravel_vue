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
            ['pelaje' => 'esponjoso'],

            ['pelaje' => 'peludo'],

            ['pelaje' => 'pelado'],

            ['pelaje' => 'normal'],

            ['pelaje' => 'angora']

        ]);

    }
}
