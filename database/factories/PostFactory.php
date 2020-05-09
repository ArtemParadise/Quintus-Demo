<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $title = $faker->realText(50);
    $body = $faker->realText(700);
    $descr = mb_substr($body, 0, 100)."...";
    $date = $faker->dateTimeBetween('-100 days', 'now');
    $img = '/images/bckg1.jpg';
    $stick = false;

    return [
        'title' => $title,
        'body' => $body,
        'descr' => $descr,
        'updated_at' => $date,
        'created_at' => $date,
        'img' => $img,
        'stick' => $stick,
        'category_id' => 1
    ];
});
