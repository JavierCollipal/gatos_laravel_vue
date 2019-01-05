<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class complexionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('complexion')->insert([
            ['complexion' => 'Gordito','activo'=>'S'],

            ['complexion' => 'Flaco','activo'=>'S'],

            ['complexion' => 'Normal','activo'=>'S']
        ]);
    }
}
