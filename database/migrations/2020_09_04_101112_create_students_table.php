<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('dob');
            $table->string('placeofbirth');
            $table->string('ssn')->nullable();
            $table->string('entry');
            $table->string('current');
            $table->string('studymode');
            $table->string('address_telephone');
            $table->float('owe');
            $table->string('date1');
            $table->string('guardian_name');
            $table->integer('guardian_nationality');
            $table->text('occupation_rank')->nullable();
            $table->text('guardian_address_telephone');
            $table->text('guardian_telephone');
            $table->string('date2');
            $table->unsignedBigInteger('registeds_id');
            $table->foreign('registeds_id')->references('id')->on('registeds')->onDelete('cascade');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
}
