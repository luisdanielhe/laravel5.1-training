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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name'          => $faker->name,
        'email'         => $faker->email,
        'password'      => bcrypt(str_random(10)),
        'remember_token'=> str_random(10),
        // 'role'           => $faker->randomElement(['user', 'editor'])
    ];
});

$factory->define(App\Practice::class, function (Faker\Generator $faker) {
    return [
        'title'          => $faker->sentence($nbWords = 4),
        'description'    => $faker->paragraph($nbSentences = 3),
        'published_at'   => $faker->dateTime($max = 'now'),
    ];
});

$factory->define(App\Tag::class, function (Faker\Generator $faker) {
    return [
        'name'        => $faker->word,
    ];
});

$factory->define(App\Article::class, function (Faker\Generator $faker) {
    return [
        'user_id'        => $faker->numberBetween($min = 1, $max = 10),
        'title'          => $faker->sentence($nbWords = 4),
        'body'           => $faker->paragraph($nbSentences = 3),
        'published_at'   => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});