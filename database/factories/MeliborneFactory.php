<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Meliborne::class, function (Faker $faker) {
    return [
        'niveauBatterie' => $faker->numberBetween(0, 100),
        'idSigfox' => $faker->regexify('0[xX][0-9a-fA-F]{8}'),
        'idRucher' => $faker->numberBetween(1, 4),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
?>
