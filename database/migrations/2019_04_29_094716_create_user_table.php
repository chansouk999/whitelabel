<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::dropIfExists('user_whitelb');
        Schema::create('user_whitelb', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userID',20);
            $table->string('userName',15);
            $table->double('balance',[15,2]);
            $table->integer('totalOnlineHour');
            $table->enum('userStatus',['online','offline']);
            $table->dateTime('registerTime');
            $table->dateTime('last_activity');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE user_white CHANGE id id INT(20) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
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

