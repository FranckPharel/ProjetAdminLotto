<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('menuroles')->Nullable();
            $table->integer('PartnerId')->Nullable();
            $table->binary('AvatarImage')->Nullable();
            $table->string('AvatarContentType')->Nullable();
            $table->string('AvatarFileName')->Nullable();
            $table->string('FirstName')->Nullable();
            $table->string('LastName')->Nullable();
            $table->dateTime('Birthday')->Nullable();
            $table->string('Occupation')->Nullable();
            $table->integer('CityId')->Nullable();
            $table->string('Tel')->Nullable();
            $table->dateTime('UpdatedOn')->Nullable();
            $table->dateTime('RegisteredOn')->Nullable();
            $table->string('LastLogOnIp')->Nullable();
            $table->dateTime('ApprovedOn')->Nullable();
            $table->dateTime('LastActivityDate');
            $table->integer('LogOnCount')->Nullable();
            $table->boolean('IsOnline')->Nullable();
            $table->boolean('IsApproved')->Nullable();
            $table->boolean('IsBlocked')->Nullable();
            $table->boolean('IsDeleted')->Nullable();
            $table->boolean('IsMan')->Nullable();
            $table->integer('DefaultStationId')->Nullable();
            $table->boolean('IsFirstConnection')->Nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
