<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('nEid');
            $table->string('sFirstName',50);
            $table->string('sLastName',50);
            $table->string('sEmail')->unique();
            $table->string('nContact', 15)->unique();
            $table->integer('nSid');
            $table->integer('nDid');
            $table->date('dJoiningDate');
            $table->date('dDateOfBirth');
            $table->foreign('nSid')->references('nSid')->on('salaries');
            $table->foreign('nDid')->references('nDid')->on('deparments');
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
        Schema::dropIfExists('employee');
    }
}
