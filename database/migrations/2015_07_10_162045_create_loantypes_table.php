<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoantypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loantypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('loantype');
            $table->string('abr');
            $table->integer('sort_order');
            $table->string('default_due_date')->default('-12-15');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('loantypes');
    }
}
