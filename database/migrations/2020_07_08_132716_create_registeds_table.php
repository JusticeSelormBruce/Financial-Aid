<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registeds', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('program');
            $table->integer('level');
            $table->string('gender');
            $table->string('index_number')->unique();
            $table->float('cgpa')->default(0.00);
            $table->string('password');
            $table->boolean('registered')->default(true);
            $table->string('semester');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registeds');
    }
}
