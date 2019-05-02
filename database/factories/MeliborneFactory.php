<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Meliborne::class, function (Faker $faker)
{
    return [
        'niveauBatterie' => $faker->numberBetween(0, 100),
        'idSigfox' => $faker->regexify('0[x][0-9A-F]{6}'),
        'idRucher' => $faker->numberBetween(1, 4),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ];
});
?>
