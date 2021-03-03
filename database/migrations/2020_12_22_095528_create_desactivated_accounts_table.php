<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesactivatedAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desactivated_accounts', function (Blueprint $table) {
            $table->bigInteger('UserId');
            $table->binary('AvatarImage');
            $table->string('AvatarContentType');
            $table->string('AvatarFileName');
            $table->string('UserName');
            $table->string('Password');
            $table->string('Email');
            $table->string('FirstName');
            $table->string('LastName');
            $table->dateTime('Birthday')->Nullable();
            $table->string('Occupation');
            $table->string('Tel');
            $table->dateTime('UpdatedOn')->Nullable();
            $table->dateTime('RegisteredOn');
            $table->string('Alias');
            $table->string('LastLogOnIp');
            $table->dateTime('ApprovedOn')->Nullable();
            $table->dateTime('LastActivityDate');
            $table->integer('LogOnCount')->Nullable();
            $table->boolean('IsOnline');
            $table->boolean('IsApproved');
            $table->boolean('IsBlocked');
            $table->boolean('IsDeleted');
            $table->boolean('IsMan')->Nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desactivated_accounts');
    }
}
