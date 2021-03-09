<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('Partner_id');  
            $table->integer('InvoiceState_id');  
            $table->string('Number');  
            $table->string('InvoicePeriodName');  
            $table->dateTime('StartDate');  
            $table->dateTime('EndDate');  
            $table->decimal('SummaryInAmount');  
            $table->decimal('SummaryOutAmount');  
            $table->decimal('SummaryProfitAmount');  
            $table->decimal('Discount');  
            $table->decimal('InvoiceAmount');  
            $table->decimal('ReceivedAmount');  
            $table->decimal('UnPaidBalance');  
            $table->dateTime('CreatedOn');  
            $table->dateTime('UpdatedOn')->Nullable();  
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
