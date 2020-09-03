<?php

use App\Registed;
use Illuminate\Database\Seeder;

class RegisteredStudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($x = 0; $x <= 50; $x++) {
            $details = factory(Registed::class)->make();
            Registed::create($details->toArray());
        }
    }
}
