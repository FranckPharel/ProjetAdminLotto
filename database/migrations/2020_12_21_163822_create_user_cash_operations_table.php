<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCashOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_cash_operations', function (Blueprint $table) {
            $table->timestamps();
            $table->bigIncrements('Id');  
            $table->integer('User_id')->unsigned();  
            $table->integer('Amount');  
            $table->integer('CashOperationType_id')->unsigned();   
            $table->string('Title');  
            $table->string('Description'); 
            $table->dateTime('OperationDate');  
            $table->dateTime('CreatedOn');  
            $table->bool('IsDeleted');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_cash_operations');
    }
}
