<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Registed;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Registed::class, function (Faker $faker) {
    $gender = $faker->randomElement(['Male', 'Female']);
    $program = $faker->randomElement([
        'Computer Science', 'Computer Network Management', 'Hospitality',
        'Purchasing and Supply', 'Post Havest', 'Accountancy', 'Electrical Engineering', 'Fashion', 'Biomedical Science', 'Medical Laboratory', 'Building Technology', 'Mecatronics', 'Mechanical Engineering', 'Statistics'
    ]);
    $level = $faker->randomElement(['100', '200', '300', '400']);
    return [

        'student_name' => $faker->name,
        'program' =>  $program,
        'level' => $level,
        'index_number' => '04/2017/' . '' . (string)rand(1000, 9000) . '' . "D",
        'registered' => true,
        'cgpa' => $faker->numberBetween(1, 5),
        'password' => Hash::make('password'),
        'semester' => 'second',
        'gender' => $gender


    ];
});
