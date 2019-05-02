<?php

use Illuminate\Database\Seeder;

class MelibornesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $melibornes = factory(\App\Models\Meliborne::class, 10)->create();
    }
}
