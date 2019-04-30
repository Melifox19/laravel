<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Mesure::class, function (Faker $faker) {
    return [
        'horodatageMesure' => $faker->dateTimeInInterval('-5 years', '2 hours'),
        'masse' => $faker->numberBetween(0, 200),
        'temperatureInt' => $faker->numberBetween(-20, 50),
        'temperatureExt' => $faker->numberBetween(-20, 50),
        'humiditeInt' => $faker->numberBetween(20, 90),
        'pression' => $faker->numberBetween(600, 1100),
        'niveauBatterie' => $faker->numberBetween(0, 100),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ];
});
