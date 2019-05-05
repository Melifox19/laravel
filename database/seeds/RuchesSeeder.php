<?php

use Illuminate\Database\Seeder;
use App\Models\Ruche;

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

      //Meliruche du projet SNIR
      Ruche::insert([
        'addrMelinet' => '1',
        'type' => 'meliruche',
        'idRucher' => '1',
        'idMeliborne' => '11'
      ]);

      //Melilabo du projet SNIR
      Ruche::insert([
        'idSigfox' => '1D1B9E',
        'type' => 'melilabo',
        'idRucher' => '1'
      ]);
    }
}
