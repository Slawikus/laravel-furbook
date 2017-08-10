<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Furbook\Breed::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name
    ];
});
