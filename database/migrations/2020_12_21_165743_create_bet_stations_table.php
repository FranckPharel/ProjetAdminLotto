<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprinteger;
use Illuminate\Support\Facades\Schema;

class CreateBetStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bet_stations', function (Blueprint $table) {
            $table->timestamps();
            $table->bigIncrements('Id'); 
            $table->integer('Partner_id')->unsigned();  
            $table->integer('Currency_id')->unsigned();  
            $table->string('Title');  
            $table->byte('LogoImage');  
            $table->string('LogoContentType');  
            $table->string('LogoFileName');  
            $table->bool('IsBlocked');  
            $table->string('Message');  
            $table->decimal('CurrentBalance');  
            $table->decimal('CurrentLimit');  
            $table->decimal('DepositAmount');  
            $table->decimal('Turnover');  
            $table->decimal('WonAmount');  
            $table->decimal('CanceledAmount');  
            $table->decimal('PaidOutAmount');  
            $table->decimal('ContractPercentage');  
            $table->dateTime('LastBalanceCaculationDate'); 
            $table->integer('CreatedBy');  
            $table->dateTime('CreatedOn');  
            $table->dateTime('UpdatedOn')->Nullable();   
            $table->bool('IsDeleted');  
            $table->integer('SuperBonusLimit');  
            $table->decimal('TombolaStartAmount');  
            $table->decimal('TombolaEndAmount');  
            $table->decimal('CurrentTombolaAmount');  
            $table->decimal('TombolaPercentage');  
            $table->bool('IsJackpotEnabled');  
            $table->dateTime('LastDrawingDate')->Nullable();  
            $table->integer('OnlineCredit');  
            $table->string('NotificationEmail');  
            $table->string('NotificationPhoneNumber');  
            $table->bool('ConsolidateShopOdds');   
            $table->integer('ShopUserCashierId')->Nullable();  
            $table->string('Activities');  
            $table->string('LocalWebSocket');  
            $table->string('LocalWebHost'); 
            $table->decimal('Credit');  
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bet_stations');
    }
}
