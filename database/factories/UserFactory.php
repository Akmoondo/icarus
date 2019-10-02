<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Situation::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'situation' => Str::random(5),
        'color' => Str::random(5),
    ];
});

$factory->define(App\Sector::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'company_uuid' => $faker->uuid,
        'sector' => Str::random(5),
    ];
});

$factory->define(App\RolePrivelege::class, function (Faker $faker) {
    return [
        'role_uuid' => $faker->uuid,
        'privilege_uuid' => $faker->uuid,
    ];
});

$factory->define(App\Role::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'name' => Str::random(5),
    ];
});

$factory->define(App\Privilege::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'name' => $faker->name,
        'slug' => Str::random(5),
    ];
});

$factory->define(App\LGPD::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'clause' => $faker->name,
        'requirement' => Str::random(5),
        'brief' => Str::random(5),
        'situation_uuid' => $faker->uuid,
        'sector_uuid' => $faker->uuid,
        
    ];
});

$factory->define(App\ISO27001::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'clause' => $faker->name,
        'requirement' => Str::random(5),
        'brief' => Str::random(5),
        'situation_uuid' => $faker->uuid,
        'sector_uuid' => $faker->uuid,
    ];
});

$factory->define(App\LGPD_ISO27001::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'lgpd_uuid' => $faker->uuid,
        'iso27001_uuid' => $faker->uuid,
        'evidence_uuid' => $faker->uuid,
    ];
});

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'cnpj' => Str::random(5),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'telphone' => rand(10000000, 99999999), 
        'sponsor' => $faker->name,
    ];
});

$factory->define(App\Evidence::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'name' => $faker->name,
        'evidence' => Str::random(5),
        'comment' => $faker->name,
    ];
});