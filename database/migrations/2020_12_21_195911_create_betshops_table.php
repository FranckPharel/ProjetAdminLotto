<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBetshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('betshops', function (Blueprint $table) {
            $table->timestamps();
            $table->bigIncrements('id');
            $table->integer('BetStation_id');
            $table->integer('Currency_id');
            $table->string('Title');
            $table->boolean('IsBlocked');
            $table->string('Message');
            $table->bigInteger('CurrentBalance');
            $table->decimal('CurrentLimit');
            $table->decimal('Turnover');
            $table->decimal('WonAmount');
            $table->decimal('CanceledAmount');
            $table->decimal('DepositAmount');
            $table->decimal('ContractPercentage');
            $table->dateTime('LastBalanceCaculationDate');
            $table->bigInteger('CreatedBy');
            $table->dateTime('CreatedOn');
            $table->dateTime('UpdatedOn')->Nullable();
            $table->boolean('IsDeleted');
            $table->decimal('MinStakeAmount');
            $table->integer('MinEventCount');
            $table->decimal('MaxStakeAmount');
            $table->integer('MaxEventCount');
            $table->integer('MaxDayCount');
            $table->integer('MaxOddValue');
            $table->decimal('MaxPayoutAmount');
            $table->integer('BookmakerId')->Nullable();
            $table->boolean('IsHoldOptimized');
            $table->boolean('ActivateLive');
            $table->string('Activities');
            $table->decimal('Credit');
            $table->boolean('IsAgent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('betshops');
    }
}
