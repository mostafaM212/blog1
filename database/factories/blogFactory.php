<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\blog::class, function (Faker $faker) {
    return [
       'name'=>$faker->name,
        'description'=>$faker->text,
        'completed'=>$faker->boolean,
        'created_at'=>$faker->dateTime

    ];
});
