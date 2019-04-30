<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Mesure::class, function (Faker $faker) {
    return [
        'horodatageMesure' => dateTimeInInterval('-30 years', '+2 hours'),
        'temperature' => numberBetween(-15, 50),
        'humidite' => numberBetween(0, 100),
        'niveauBatterie' => numberBetween(0, 100),
        

        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
