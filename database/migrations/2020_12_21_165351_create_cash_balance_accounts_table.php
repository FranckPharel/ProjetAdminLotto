<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashBalanceAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_balance_accounts', function (Blueprint $table) {
            $table->timestamps();
            $table->bigIncrements('id');
            $table->string('AccountName'); 
            $table->decimal('CurrentBalance');  
            $table->integer('PartnerId');  
            $table->dateTime('CreatedOn');  
            $table->dateTime('LastOperationDate');
    
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cash_balance_accounts');
    }
}
