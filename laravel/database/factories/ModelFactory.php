<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'author_id' => function () {
            return factory(App\Author::class)->create()->id;
        },
        'body' => $faker->paragraphs(rand(3,10), true),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Author::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'bio' => $faker->paragraph,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Profile::class, function (Faker\Generator $faker) {
    return [
        'birthday' => $faker->dateTimeBetween('-100 years', '-18 years'),
        'author_id' => function () {
            return factory(App\Author::class)->create()->id;
        },
        'city' => $faker->city,
        'state' => $faker->state,
        'website' => $faker->domainName,
    ];
});
