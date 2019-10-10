<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Eprizy/Models\Prize;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Prize::class, function (Faker $faker) {
    return [
        'prize_id' => random_int(0, 9223372036854775807),
        'category_id' => random_int(0, 9223372036854775807),
        'user_id' => random_int(0, 9223372036854775807),
        'title' => $faker->words(3, true),
        'description' => $faker->sentence(),
        'amount' => $faker->sentence(),
        'cost' => $faker->sentence(),
        'active' => $faker->sentence(),
        'free' => $faker->sentence(),
        'confirmed' => $faker->sentence(),
        'premium' => $faker->sentence(),
        'raised_amount' => $faker->sentence(),
        'expiry_date' => $faker->dateTimeBetween('-30 years', 'now')
    ];
});