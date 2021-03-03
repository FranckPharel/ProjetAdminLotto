<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivatedAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activated_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->bigInteger('UserId'); 
            $table->string('UserName');  
            $table->string('Code');  
            $table->dateTime('ActivatedOn')->Nullable; 
            $table->string('Message');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activated_accounts');
    }
}
