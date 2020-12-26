<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerInvoiceSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_invoice_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('Partner_id')->unsigned();
            $table->decimal('Percentage');
            $table->bigInteger('CreatedBy');
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
        Schema::dropIfExists('partner_invoice_settings');
    }
}
