<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashoutRapportDisplaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashout_rapport_displays', function (Blueprint $table) {
            $table->timestamps();
            $table->string('Shop');
            $table->integer('Director');
            $table->integer('Accounter');
            $table->integer('Bank');
            $table->integer('OrangeMoney');
            $table->integer('MtnMobileMoney');
            $table->integer('Salary');
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
        Schema::dropIfExists('cashout_rapport_displays');
    }
}
