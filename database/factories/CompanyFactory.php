<?php

use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => str_slug($faker->name),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'logo' => $faker->imageUrl(),
        'working_hours_day' => '10:00',
        'working_hours_night' => '22:00',
        'facebook' => 'facebook.com',
        'twitter' => 'twitter.com',
        'instagram' => 'instagram.com',
        'about_text' => $faker->text(),
        'about_image' => $faker->imageUrl(),
    ];
});
