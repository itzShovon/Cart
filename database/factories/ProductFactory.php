<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;

// $factory->define(Model::class, function (Faker $faker) {
$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        // 'image' => asset('storage/products/default.jpg'),
        'image' => $faker->imageUrl($width = 800, $height = 800),
        'size' => $faker->numberBetween($min = 1, $max = 1000) . ' x ' . $faker->numberBetween($min = 1, $max = 1000),
        'description' => $faker->paragraph,
        'price' => $faker->randomDigitNotNull,
        'quantity' => $faker->numberBetween($min = 0, $max = 100),
        // 'name' => $faker->name,
        // 'email' => $faker->unique()->safeEmail,
        // 'email_verified_at' => now(),
        // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        // 'remember_token' => Str::random(10),
    ];
});
