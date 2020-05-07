<?php
declare(strict_types = 1);

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->title,
        'desc' => $faker->text,
        'price' => $faker->numberBetween(0, 100),
        'count' => $faker->randomNumber(),
        'views' => $faker->randomNumber(),
        'rates' => $faker->numberBetween(0, 5),
        'brand_id' => $faker->numberBetween(1, 5),
        'category_id' => $faker->numberBetween(1, 5),
    ];
});
