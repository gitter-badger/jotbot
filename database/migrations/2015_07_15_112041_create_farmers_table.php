<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('farmer');
            $table->string('nick')->nullable();
            $table->string('password', 64)->default(Hash::make('changme'));
            $table->boolean('new_client')->default(1);
            $table->integer('loc_id')->default('4');
            $table->string('ssn')->unique();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->integer('state_id')->nullable();
            $table->string('zip', 10)->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->date('dob')->nullable();
            $table->integer('first_year_farmer')->default(0);
            $table->integer('farm_exp')->default(0);
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
        Schema::drop('farmers');
    }
}
