<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');
            $table->string('Title');
            $table->string('Description');
            $table->integer('UserCountInRole')->Nullable;
            $table->integer('CreatedBy');
            $table->boolean('IsActive')->Nullable;
            $table->boolean('IsDeleted')->Nullable;
            $table->boolean('IsBlocked')->Nullable;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
