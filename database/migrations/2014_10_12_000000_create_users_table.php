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
            $table->string('menuroles');
            $table->integer('PartnerId');
            $table->byte('AvatarImage');
            $table->string('AvatarContentType');
            $table->string('AvatarFileName');
            $table->string('FirstName');
            $table->string('LastName');
            $table->dateTime('Birthday')->Nullable();
            $table->string('Occupation');
            $table->integer('CityId')->Nullable();
            $table->string('Tel');
            $table->dateTime('UpdatedOn')->Nullable();
            $table->dateTime('RegisteredOn');
            $table->string('LastLogOnIp');
            $table->dateTime('ApprovedOn')->Nullable();
            $table->dateTime('LastActivityDate');
            $table->integer('LogOnCount')->Nullable();
            $table->boolean('IsOnline');
            $table->boolean('IsApproved');
            $table->boolean('IsBlocked');
            $table->boolean('IsDeleted');
            $table->boolean('IsMan')->Nullable();
            $table->integer('DefaultStationId')->Nullable();
            $table->boolean('IsFirstConnection');
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
