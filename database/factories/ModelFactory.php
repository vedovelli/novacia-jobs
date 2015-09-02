<?php



$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Job::class, function (Faker\Generator $faker) {
    return [
        'jobs_nome' => $faker->name,
        'jobs_cliente' => $faker->name,
        'jobs_responsavel' => $faker->name,
    ];
});
