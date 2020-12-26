<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraphModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graph_models', function (Blueprint $table) {
            $table->timestamps();
            $table->dateTime('PeriodDate');
            $table->integer('Profit');
            $table->integer('MissingMoney');
            $table->integer('Expense');
            $table->integer('Provision');
            $table->integer('Cashout');
            $table->string('Title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graph_models');
    }
}
