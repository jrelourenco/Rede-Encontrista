<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Encontrista::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Meeting::class, function (Faker\Generator $faker) {
    return [
        'place' => $faker->city,
        'start_date' => $faker->dateTime,
        'end_date' => $faker->dateTime,
        'type_id' => DB::table('meeting_types')->orderBy(DB::raw('RAND()'))->get()[0]->id,
    ];
});
