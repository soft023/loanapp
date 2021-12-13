<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanhistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loanhistories', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('user_id');
             $table->string('amountrequested');
             $table->string('amountgranted')->nullable();
             $table->string('tenor');
             $table->string('loanpurpose');
             $table->string('processedby')->nullable(); 
             $table->string('processeddate')->nullable();
             $table->string('reasonforyes')->nullable();
             $table->string('reasonforno')->nullable();
             $table->string('loanrequeststatus');
             $table->string('loanstatus');  
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
        Schema::dropIfExists('loanhistories');
    }
}
