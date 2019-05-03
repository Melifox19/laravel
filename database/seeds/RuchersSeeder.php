<?php

use Illuminate\Database\Seeder;
use App\Models\Rucher;

class RuchersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rucher::insert([
          'nom' => 'Rucher des Pyrénnées (Toto)',
          'idApiculteur' => '3',
          'created_at' => '2019-01-01 00:00:00',
          'updated_at' => '2019-01-01 00:00:00',
        ]);
        Rucher::insert([
          'nom' => 'Rucher du Mont Blanc (Toto)',
          'idApiculteur' => '3',
          'created_at' => '2019-01-01 00:00:00',
          'updated_at' => '2019-01-01 00:00:00',
        ]);
        Rucher::insert([
          'nom' => 'Rucher du Piton de la Fournaise (Tata)',
          'idApiculteur' => '4',
          'created_at' => '2019-01-01 00:00:00',
          'updated_at' => '2019-01-01 00:00:00',
        ]);
        Rucher::insert([
          'nom' => 'Rucher de l\'AAI (Tata)',
          'idApiculteur' => '4',
          'created_at' => '2019-01-01 00:00:00',
          'updated_at' => '2019-01-01 00:00:00',
        ]);
    }
}
