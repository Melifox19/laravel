<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Ruche::class, function (Faker $faker)
{
  $type_ruche = mt_rand(1, 2);

  if ($type_ruche == 1)
  {
    return [
        'addrMelinet' => $faker->numberBetween(1, 8),
        'type' => 'meliruche',
        'idRucher' => $faker->numberBetween(1, 4),
        'idMeliborne' => $faker->numberBetween(1, 10),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ];
  }
  else
  {
    return [
      'idSigfox' => $faker->regexify('[0-9A-F]{6}'),
        'type' => 'melilabo',
        'longitude' => $faker->longitude(),
        'latitude' => $faker->latitude(),
        'idRucher' => $faker->numberBetween(1, 4),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ];
  }

});
?>
