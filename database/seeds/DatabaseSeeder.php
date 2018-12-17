<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(caracterTableSeeder::class);
        $this->call(complexionTableSeeder::class);
        $this->call(coloresTableSeeder::class);
        $this->call(pelajesTableSeeder::class);
        $this->call(razasTableSeeder::class);
        $this->call(tipoTableSeeder::class);
        $this->call(gatosTableSeeder::class);
    }
}
