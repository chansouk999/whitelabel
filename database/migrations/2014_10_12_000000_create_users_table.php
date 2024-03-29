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
            $table->string('user_id',20);
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('totalOnlineHour');
            $table->enum('userStatus',['online','offine']);
            $table->dateTime('registerTime');
            $table->dateTime('last_activity');
            $table->string('provider_name',50);
            $table->string('pro_id',4);
            $table->string('userBalance');
            $table->dateTime('accessTime')->nullable();
            $table->string('accessIP',25)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        // Schema::table('users', function (Blueprint $table) {
        //     $table->increments('id');
        // });
        // DB::statement('ALTER TABLE users CHANGE id id INT(11) NOT NUL');
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
