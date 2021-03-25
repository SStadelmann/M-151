<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            
            $table->id('customerId');
            $table->timestamps();
            $table->string('username');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('password');
            $table->string('street');
            $table->integer('zip');
            $table->string('city');
            $table->string('phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
