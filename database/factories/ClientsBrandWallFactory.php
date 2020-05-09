<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\ClientsBrandWall;
use Faker\Generator as Faker;

$factory->define(ClientsBrandWall::class, function (Faker $faker) {
    $imgs = ['mt_eagle_client1.png', 'mt_eagle_client3.png', 'mt_eagle_client4.png', 'mt_eagle_clients.png'];

    $title = $faker->realText(rand(10, 20));
    $img = '/images/'.$imgs[array_rand($imgs)];
    $time = $faker->dateTimeBetween('-30 days', 'now');


    return [
        'title' => $title,
        'img' => $img,
        'active' => true,
        'created_at' => $time,
        'updated_at' => $time,
    ];
});
