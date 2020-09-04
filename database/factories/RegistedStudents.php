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
    $cgpa = $faker->randomElement([3.0, 3.1, 3.2,3.3, 3.4, 3.5,3.6, 3.7, 3.8, 3.9, 4.0, 4.1,4.2,4.3,4.4,4.5,4.6,4.7,4.8,4.9,5.0]);
    return [

        'student_name' => $faker->name,
        'program' =>  $program,
        'level' => $level,
        'index_number' => '04/2017/' . '' . (string)rand(1000, 9000) . '' . "D",
        'registered' => true,
        'cgpa' => $cgpa,
        'password' => Hash::make('password'),
        'semester' => 'second',
        'gender' => $gender


    ];
});
