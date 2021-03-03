<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseRepportDisplaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_repport_displays', function (Blueprint $table) {
            $table->timestamps();
            $table->string('Shop');
            $table->integer('Maintenance');
            $table->integer('Transport');
            $table->integer('Internet');
            $table->integer('PhoneCreditCall');
            $table->integer('Fuel');
            $table->integer('invoicePayment');
            $table->integer('Eneo');
            $table->integer('Others');
            $table->integer('Summary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expense_repport_displays');
    }
}
