<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $date = $faker->dateTimeBetween('-30  days', 'now');
    return [
        'title' => 'Industrial',
        'updated_at' => $date,
        'created_at' => $date
    ];
});
