<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashierDailyReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashier_daily_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Partner_id')->unsigned();
            $table->integer('Station_id')->unsigned();
            $table->integer('Cashier_id')->unsigned();
            $table->integer('Employee_id')->unsigned();
            $table->integer('Betshop_id')->unsigned();
            $table->integer('InitialBalance');
            $table->integer('FinalBalance');
            $table->integer('OtherProfit');
            $table->integer('ParifootProfit');
            $table->integer('VgamesProfit');
            $table->integer('MissingMoney');
            $table->integer('Expenses');
            $table->integer('Provision');
            $table->integer('Cashout');
            $table->string('JsonData');
            $table->string('Signature');
            $table->string('Comments');
            $table->dateTime('CreatedOn');
            $table->dateTime('UpdatedOn')->nullable();
            $table->string('DailyReportType');
            $table->integer('DailyReportPeriod');
            $table->boolean('IsDeleted');
            $table->string('Activities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cashier_daily_reports');
    }
}
