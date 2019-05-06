<?php

use Illuminate\Database\Seeder;
use App\Models\Ruche;

class MesuresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $ruches_list = Ruche::all();

      foreach ($ruches_list as $ruche => $data)
      {
        $ruches = factory(\App\Models\Mesure::class, 5)->create(['idRuche' => $data->idRucher]);
      }
    }
}
