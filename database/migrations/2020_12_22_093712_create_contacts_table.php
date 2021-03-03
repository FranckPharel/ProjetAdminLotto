<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->bigInteger('UserId'); 
            $table->string('Tel');  
            $table->string('Email')->unique();  
            $table->string('ZipCode');  
            $table->string('Address');  
            $table->string('Address2');  
            $table->string('Address3');  
            $table->string('Address4');  
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
