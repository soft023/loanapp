<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
             $table->string('natureofbusiness')->nullable();
             $table->string('businessage')->nullable();
             $table->string('weeklysales')->nullable();
             $table->string('refreename1')->nullable();
             $table->string('refreerelationship1')->nullable();
             $table->string('refreeaddress1')->nullable();
             $table->string('refreephone1')->nullable();         
             $table->string('refreename2')->nullable();
             $table->string('refreerelationship2')->nullable();
             $table->string('refreeaddress2')->nullable();
             $table->string('refreephone2')->nullable();
             $table->string('bankaccountname')->nullable();
             $table->string('bankaccountnumber')->nullable();
             $table->string('bvn')->nullable();
             $table->string('bankstatement')->nullable();
             $table->string('passport')->nullable();
             $table->string('otherid')->nullable();
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
        Schema::dropIfExists('traders');
    }
}
