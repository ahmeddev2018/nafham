<?php

use Faker\Generator as Faker;

$factory->define(\App\Company::class, function (Faker $faker) {
    return [
        //

        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'logo' => '15226192301231.jpg',
        'website' => 'website@website.com',

    ];
});
