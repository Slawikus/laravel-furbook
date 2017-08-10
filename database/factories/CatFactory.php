<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Furbook\Cat::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'date_of_birth' => $faker->date(),
        'breed_id' => function () {
            return factory(Furbook\Breed::class)->create()->id;
        }
    ];
});
