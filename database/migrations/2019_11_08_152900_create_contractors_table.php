<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('projecttype')->nullable();
            $table->string('projectdescription')->nullable();
            $table->string('projectcurrentstage')->nullable();
            $table->string('projectlocation')->nullable();
            $table->string('costofproject')->nullable();
            $table->string('moneyspent')->nullable();
            $table->string('moneytospend')->nullable();
            $table->string('companyname')->nullable();
            $table->string('section')->nullable();
            $table->string('companyaddress')->nullable();
            $table->string('companyphone')->nullable();
            $table->string('contractawardletter')->nullable();
            $table->string('directorname1')->nullable();
            $table->string('directoraddress1')->nullable();
            $table->string('directorphone1')->nullable();
            $table->string('directorbvn1')->nullable();
            $table->string('directoridcard1')->nullable();  
            $table->string('directorname2')->nullable();
            $table->string('directoraddress2')->nullable();
            $table->string('directorphone2')->nullable();
            $table->string('directorbvn2')->nullable();
            $table->string('directoridcard2')->nullable();
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
        Schema::dropIfExists('contractors');
    }
}
