<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Ruche::class, function (Faker $faker) {
    return [
        'addrMelinet' => $faker->numberBetween(1, 8),
        'type' => 'meliruche',
        'idRucher' => $faker->numberBetween(1, 4),
        'idMeliborne' => $faker->numberBetween(1, 10),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime()
    ];
});
?>
