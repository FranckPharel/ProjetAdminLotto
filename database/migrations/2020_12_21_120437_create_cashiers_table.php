<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashiers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('CashierRole_id')->unsigned();
            $table->string('FirstName');
            $table->string('Name');
            $table->string('Login');
            $table->string('Message');
            $table->string('Password');
            $table->dateTime('CreatedOn');
            $table->Bool('IsBlocked');
            $table->Bool('IsDeleted');
            $table->dateTime('LastLogDate');
            $table->Bool('IsOnline');
            $table->integer('CreatedBy');
            $table->dateTime('UpdateOn');
            $table->dateTime('LastLogOffDate');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cashiers');
    }
}
