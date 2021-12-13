<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('title')->nullable();
            $table->string('dob')->nullable();
            $table->string('jobclassification')->nullable();
            $table->string('maritalstatus')->nullable();
            $table->string('noofdependant')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('nokfullname')->nullable();
            $table->string('nokphone')->nullable();
            $table->string('relationshipwithnok')->nullable();
            $table->string('howdidyouhearaboutus')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
