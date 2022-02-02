<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('user_id');
            $table->string('name',50);
            $table->date('date_of_birth');
            $table->enum('gender',['Male','Female']);
            $table->string('country',50);
            $table->string('mobile', 15)->unique(); 
            $table->boolean('mobile_verified')->default(0); 
            $table->string('email',50)->unique();
            $table->boolean('email_verified')->default(0);
            $table->string('password', 20);
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
