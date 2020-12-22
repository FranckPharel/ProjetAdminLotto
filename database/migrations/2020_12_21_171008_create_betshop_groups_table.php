<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBetshopGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('betshop_groups', function (Blueprint $table) {
            $table->timestamps();
            $table->bigIncrements('id');  
            $table->integer('Partner_id')->unsigned(); 
            $table->integer('Betshop_id')->unsigned(); 
            $table->integer('Station_id')->unsigned();
            $table->dateTime('CreatedOn'); 
            $table->integer('CreatedBy'); 
            $table->dateTime('UpdatedOn'); 
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
        Schema::dropIfExists('betshop_groups');
    }
}
