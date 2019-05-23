<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUseraccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('useraccesses');
        Schema::create('useraccesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userID')->unsigned();
            $table->string('userPasscode',30);
            $table->datetime('accessTime');
            $table->string('accessIP',30);
            $table->foreign('userID')->references('id')->on('user_whitelb')->onDelete('cascade');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE useraccesses CHANGE userID userID INT(20) UNSIGNED ZEROFILL NOT NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('useraccesses');
    }
}





