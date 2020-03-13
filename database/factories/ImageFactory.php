<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'file_name'=>$faker->url,
        'imageable_type'=>$faker->text,
        'imageable_id'=>rand(1,15),


    ];
});
