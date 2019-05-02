<?php

use Illuminate\Database\Seeder;

class RuchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $ruches = factory(\App\Models\Ruche::class, 50)->create();
    }
}
