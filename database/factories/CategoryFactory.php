<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Eprizy/Models\Category;
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

$factory->define(Category::class, function (Faker $faker) {
    return [
        'catgegoryable_id' => random_int(0, 9223372036854775807),
        'categoryable_type' => $faker->sentence(),
        'slug' => $faker->slug,
        'name' => $faker->name(),
        'active' => $faker->sentence()
    ];
});