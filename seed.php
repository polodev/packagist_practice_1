<?php
require 'vendor/autoload.php';
$faker = Faker\Factory::create();
// to create user fake data
for ($i = 0; $i < 10; $i++) {
  User::create([
    'name' => $faker->name,
    'email' => $faker->email,
    'password' => password_hash('secret', PASSWORD_BCRYPT),
  ]);
}

//to create post fake data
for ($i = 0; $i < 10; $i++) {
  Post::create([
    'title' => $faker->sentence,
    'user_id' => $i + 1,
    'content' => $faker->paragraph(10),
    'excerpt' => $faker->paragraph()
  ]);
}






