<?php

use Faker\Generator as Faker;

$factory->define(\App\Building::class, function (Faker $faker) {
    return [
            'building_id' => $faker->randomElement(['1-686111', '1-78334', '1-982342', '1-982123']),
            'service_number' => $faker->randomNumber(6),
            'building_group' => $faker->randomElement(['Consumer', 'SME']),
            'building_name' => $faker->randomElement(['WMU', 'KRT', 'SMD', 'BPI']),
            'description'=>'testing',
            'status' => $faker->randomNumber(1),
            'state' => $faker->randomNumber(1),
    ];
});
