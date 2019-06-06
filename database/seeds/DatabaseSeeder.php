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
        $this->call(UsersSeeder::class);
        $this->call(RuchersSeeder::class);
        $this->call(MelibornesSeeder::class);
        $this->call(RuchesSeeder::class);
        $this->call(MesuresSeeder::class);
    }
}
