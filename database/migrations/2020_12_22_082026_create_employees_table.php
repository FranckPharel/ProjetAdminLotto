<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('Partner_id')->unsigned();
            $table->integer('Station_id')->unsigned();
            $table->integer('Department_id')->unsigned();
            $table->string('Address');
            $table->string('Firstname');
            $table->string('Lastname');
            $table->string('PrimaryPhoneNumber');
            $table->string('SecondaryPhoneNumber');
            $table->string('Skype');
            $table->string('SecurityCode');
            $table->string('Email')->unique();
            $table->dateTime('BornOn');
            $table->integer('BaseSalary');
            $table->boolean('IsMale');
            $table->boolean('IsBlocked');
            $table->boolean('IsDeleted');
            $table->dateTime('RegisteredOn')->Nullable();
            $table->dateTime('CreatedOn');
            $table->dateTime('UpdateOn');
            $table->integer('Cashier_id')->unsigned(); ;
            $table->boolean('IsManager');
            $table->string('Activities');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
