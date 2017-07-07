<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         // Create table for storing bank information
        Schema::create('bank_information', function (Blueprint $table) {
            $table->increments('id');
        
      
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->string('address');
            $table->string('account_type')->nullable();
            $table->string('phone_number',14)->nullable();
            $table->integer('account_number',11)->unique();
            $table->decimal('opening_bal',10,2)->nullable();
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
       Schema::dropIfExists('bank_information');
    }
}
