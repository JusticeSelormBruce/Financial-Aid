<?php

use App\Route;
use Illuminate\Database\Seeder;

class RouteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Route::create([
            'name' => 'Roles',
            'route' => '/admin/role-index'
        ]);
        Route::create([
            'name' => 'Privilege',
            'route' => '/admin/assign-privilege-index'
        ]);
        Route::create([
            'name' => 'User Account',
            'route' => '/admin/user-accounts-index'
        ]);
        Route::create([
            'name' => 'Reset Password',
            'route' => '/admin/reset-password'
        ]);
        Route::create([
            'name' => 'Change Password',
            'route' => '/change-password-index'
        ]);
    }
}
