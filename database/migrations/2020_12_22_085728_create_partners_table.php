<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Title');
            $table->string('Description');
            $table->dateTime('CreatedOn')->Nullable();
            $table->dateTime('UpdatedOn')->Nullable();
            $table->boolean('IsActive');
            $table->boolean('IsBlocked');
            $table->boolean('IsDeleted');
            $table->decimal('ContractPercentage')->Nullable();
            $table->string('AppKey');
            $table->string('Address');
            $table->string('Phone');
            $table->byte('LogoImage');
            $table->string('LogoContentType');
            $table->string('LogoFileName');
            $table->byte('PrintLogoImage');
            $table->string('PrintLogoContentType');
            $table->string('PrintLogoFileName');
            $table->string('Email')->unique();
            $table->boolean('IsSmsMsgEnabled');
            $table->boolean('IsEmailMsgEnabled');
            $table->boolean('IsUserMsgEnabled');
            $table->byte('CashierClientLogoImage');
            $table->string('CashierClientLogoContentType');
            $table->string('CashierClientLogoFileName');
            $table->decimal('InvoiceBalance');
            $table->decimal('PaidBalance');
            $table->integer('CurrencyId');
            $table->decimal('CurrentLimit');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partners');
    }
}
