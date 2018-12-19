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
        $this->call(
        [
            caracterTableSeeder::class,
            complexionTableSeeder::class,
            coloresTableSeeder::class,
            pelajesTableSeeder::class,
            razasTableSeeder::class,
            tipoTableSeeder::class,
            gatosTableSeeder::class
        ]);
    }
}
