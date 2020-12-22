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
            $table->increments('id');
            $table->timestamps();
            $table->bigInteger('UserId'); 
            $table->byte('AvatarImage');  
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
            $table->bool('IsOnline');  
            $table->bool('IsApproved');  
            $table->bool('IsBlocked');  
            $table->bool('IsDeleted');  
            $table->bool('IsMan')->Nullable();  
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
