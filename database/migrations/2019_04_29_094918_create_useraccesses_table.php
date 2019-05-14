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
        Schema::create('useraccesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userID',20);
            $table->string('userPasscode',30);
            $table->datetime('accessTime');
            $table->string('accessIP',30);
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
        Schema::dropIfExists('useraccesses');
    }
}





