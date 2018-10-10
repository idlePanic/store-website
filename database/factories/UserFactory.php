<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});


$factory->define(App\comment::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'user_id' => function(){
            return factory(App\User::class)->create()->id;
        },
        'product_id' =>function(){
            return factory(App\Product::class)->create()->id;
        },
        ];
});

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => rand(200,4000),
        'cat_id' => function(){
            return factory(App\Category::class)->create()->id;
        }
    ];
});

