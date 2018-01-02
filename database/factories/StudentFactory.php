<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'login_id' => factory(App\Models\Login::class)->create(['role' => 'student'])->id
    ];
});
