<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Status::class, function (Faker $faker) {

    return [
        'content' => $faker->text(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
    ];
});
