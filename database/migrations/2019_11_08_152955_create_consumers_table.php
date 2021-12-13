<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumers', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->integer('user_id');
             $table->string('employmentstatus')->nullable();
             $table->string('currentworkplace')->nullable();
             $table->string('workplaceaddress')->nullable();
             $table->string('closestlandmark')->nullable();
             $table->string('department')->nullable();
             $table->string('netmonthlysalary')->nullable();
             $table->string('officeemail')->nullable();
             $table->string('payday')->nullable();
             $table->string('staffidcard')->nullable();
             $table->string('otherid')->nullable();
             $table->string('passport')->nullable();
             $table->string('pensionstatement')->nullable();
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
        Schema::dropIfExists('consumers');
    }
}
