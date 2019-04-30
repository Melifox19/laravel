<?php

use Illuminate\Database\Seeder;

class MesuresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $ruches = factory(\App\Models\Mesure::class, 200)->create();
    }
}
