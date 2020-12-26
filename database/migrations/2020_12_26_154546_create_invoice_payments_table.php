<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('invoice_id')->unsigned();
            $table->dateTime('OperationDate');
            $table->decimal('Amount');
            $table->integer('cashBalanceAccount_id')->unsigned();
            $table->string('Commentary');
            $table->boolean('IsDeleted');
            $table->boolean('IsVerified');
            $table->dateTime('UpdatedOn')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_payments');
    }
}
