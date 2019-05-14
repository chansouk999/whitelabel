<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_white', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userID',20);
            $table->string('userName',15);
            $table->double('balance',[15,2]);
            $table->integer('totalOnlineHour');
            $table->enum('userStatus',['onlinr','offline']);
            $table->dateTime('registerTime');
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
        Schema::dropIfExists('user');
    }
}

