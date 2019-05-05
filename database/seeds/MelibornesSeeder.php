<?php

use Illuminate\Database\Seeder;
use App\Models\Meliborne;

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

        // Meliborne du projet SNIR
        Meliborne::insert([
          'niveauBatterie' => '70',
          'idSigfox' => '1D24F7',
          'idRucher' => '1'
        ]);
    }
}
