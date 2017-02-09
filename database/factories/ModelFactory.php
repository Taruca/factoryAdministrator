<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Contact::class, function (Faker\Generator $faker) {
    $datetime = $faker->date . ' ' . $faker->time;
    $name = $faker->name;
    $firstLetter = getFirstLetterOfName($name);

    return [
        'name' => $name,
        'mobile' => $faker->phoneNumber,
        'created_at' => $datetime,
        'updated_at' => $datetime,
        'first_letter' => $firstLetter,
    ];
});

$factory->define(App\Models\Product::class, function (Faker\Generator $faker) {
    $datetime = $faker->date . ' ' . $faker->time;
    $name = $faker->name;

    return [
        'name' => $name,
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1000),
        'created_at' => $datetime,
        'updated_at' => $datetime,
    ];
});
