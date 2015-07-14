<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJointventuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jointventures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id');
            $table->string('partner');
            $table->double('percent_owned');
            $table->string('ssn');
            $table->string('address');
            $table->string('city');
            $table->string('state_id');
            $table->string('zip');
            $table->string('email');
            $table->string('phone');
            $table->integer('age');
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
        Schema::drop('jointventures');
    }
}
