<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Teacher::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'login_id' => function(){
            return factory(App\Models\Login::class)->create(['role' => 'teacher'])->id;
        }
    ];
});
