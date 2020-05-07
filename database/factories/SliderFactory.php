<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Slider;
use Faker\Generator as Faker;

$factory->define(Slider::class, function (Faker $faker) {

    //TODO сделать рандомайз на 1)картинки 2)булены

    $title = $faker->realText(rand(10, 40));
    $img = '/images/bckg.jpg';
    $date = $faker->dateTimeBetween('-30 days', '-1 day');

    return [
        'title' => $title,
        'img' => $img,
        'created_at' => $date,
        'active' => true,
        'updated_at' => $date,
    ];
});
