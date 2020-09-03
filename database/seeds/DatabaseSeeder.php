<?php

use App\Settings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(RouteTableSeeder::class);
        $this->call(RegisteredStudentTableSeeder::class);
        Settings::create([
            'status'=>0
        ]);
    }
}
