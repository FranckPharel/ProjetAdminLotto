<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('users_id')->unsigned();
            $table->string('FirstName');
            $table->string('Name');
            $table->string('Login');
            $table->string('Message');
            $table->string('Password');
            $table->dateTime('CreatedOn');
            $table->boolean('IsBlocked');
            $table->boolean('IsDeleted');
            $table->dateTime('LastLogDate');
            $table->boolean('IsOnline');
            $table->bigInteger('CreatedBy');
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
        Schema::dropIfExists('managers');
    }
}
