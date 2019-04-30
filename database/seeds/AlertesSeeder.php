<?php

use Illuminate\Database\Seeder;
use App\Models\Mesure;
use App\Models\Alerte;

use Faker\Generator as Faker;

class AlertesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $mesures = Mesure::all();

        foreach ($mesures as $mesure => $data)
        {
          // --------------------------- Masse ----------------------------------


          if ($data->masse > 70) // Si la masse est supérieure à 70 kg
          {
            Alerte::insert([
              'horodatageAlerte' => $faker->dateTimeInInterval('-5 years', '2 hours'),
              'type' => 'mesure',
              'description' => 'Masse elevee',
              'idRuche' => $data->idRuche
            ]);
          }
          if ($data->masse < 20)
          {
            Alerte::insert([
              'horodatageAlerte' => $faker->dateTimeInInterval('-5 years', '2 hours'),
              'type' => 'mesure',
              'description' => 'Masse faible',
              'idRuche' => $data->idRuche
            ]);

          }
          if ($data->masse < 0)
          {
            Alert::insert([
            'horodatageAlerte' => $faker->dateTimeInInterval('-5 years', '2 hours'),
            'type' => 'vol',
            'description' => 'Ruche non detectee',
            'idRuche' => $data->idRuche
          ]);
          }

          // --------------------------- Température intérieure ----------------------------------

          if ($data->temperatureInt > 36)
          {
            Alerte::insert([
              'horodatageAlerte' => $faker->dateTimeInInterval('-5 years', '2 hours'),
              'type' => 'mesure',
              'description' => 'Temperature interieure elevee',
              'idRuche' => $data->idRuche
            ]);
          }
          if ($data->temperatureInt < 30)
          {
            Alerte::insert([
              'horodatageAlerte' => $faker->dateTimeInInterval('-5 years', '2 hours'),
              'type' => 'mesure',
              'description' => 'Temperature interieure faible',
              'idRuche' => $data->idRuche
            ]);
          }

          // --------------------------- Température extérieure ----------------------------------

          if ($data->temperatureExt > 40)
          {
            Alerte::insert([
              'horodatageAlerte' => $faker->dateTimeInInterval('-5 years', '2 hours'),
              'type' => 'mesure',
              'description' => 'Temperature exterieure elevee',
              'idRuche' => $data->idRuche
            ]);
          }
          if ($data->temperatureExt < 0)
          {
            Alerte::insert([
              'horodatageAlerte' => $faker->dateTimeInInterval('-5 years', '2 hours'),
              'type' => 'mesure',
              'description' => 'Temperature exterieure faible',
              'idRuche' => $data->idRuche
            ]);
          }

          // --------------------------- Humidité intérieure ----------------------------------

          if ($data->humiditeInt > 25)
          {
            Alerte::insert([
              'horodatageAlerte' => $faker->dateTimeInInterval('-5 years', '2 hours'),
              'type' => 'mesure',
              'description' => 'Humidite interieure elevee',
              'idRuche' => $data->idRuche
            ]);
          }
          if ($data->humiditeInt < 20)
          {
            Alerte::insert([
              'horodatageAlerte' => $faker->dateTimeInInterval('-5 years', '2 hours'),
              'type' => 'mesure',
              'description' => 'Humidite interieure faible',
              'idRuche' => $data->idRuche
            ]);
          }

          // --------------------------- Humidité extérieure ----------------------------------

          if ($data->humiditeExt > 65)
          {
            Alerte::insert([
              'horodatageAlerte' => $faker->dateTimeInInterval('-5 years', '2 hours'),
              'type' => 'mesure',
              'description' => 'Humidite exterieure elevee',
              'idRuche' => $data->idRuche
            ]);
          }
          if ($data->humiditeExt < 40)
          {
            Alerte::insert([
              'horodatageAlerte' => $faker->dateTimeInInterval('-5 years', '2 hours'),
              'type' => 'mesure',
              'description' => 'Humidite exterieure faible',
              'idRuche' => $data->idRuche
            ]);
          }

          // --------------------------- Niveau de batterie ---------------------------

          if ($data->niveauBatterie < 30)
          {
            Alerte::insert([
              'horodatageAlerte' => $faker->dateTimeInInterval('-5 years', '2 hours'),
              'type' => 'mesure',
              'description' => 'Batterie faible',
              'idRuche' => $data->idRuche
            ]);
          }

          // --------------------------- Débit Sonore (200Hz) ---------------------------

          if ($data->debitSonore200 > 190 && $data->debitSonore200 < 210)
          {
            Alerte::insert([
              'horodatageAlerte' => $faker->dateTimeInInterval('-5 years', '2 hours'),
              'type' => 'mesure',
              'description' => 'Essaimage potentiel (200 Hz)',
              'idRuche' => $data->idRuche
            ]);
          }

          if ($data->debitSonore400 > 400 && $data->debitSonore400 < 500)
          {
            Alerte::insert([
              'horodatageAlerte' => $faker->dateTimeInInterval('-5 years', '2 hours'),
              'type' => 'mesure',
              'description' => 'Essaimage potentiel (400 Hz)',
              'idRuche' => $data->idRuche
            ]);
          }

        }
    }
}
