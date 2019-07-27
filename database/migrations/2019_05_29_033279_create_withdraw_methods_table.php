<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('withdraw_methods');
        Schema::create('withdraw_methods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ids')->unsigned();
            $table->string('userName', 30);
            $table->string('bankAccount', 30);
            $table->string('registerProvince', 50);
            $table->string('registerCity', 50);
            $table->string('branch', 50);
            $table->string('user_id', 20);
            $table->string('methodId', 2);
            $table->text('desc')->nullable();
            $table->foreign('ids')->references('id')->on('users')->onDelete('cascade');
            $table->enum('status', ['use', 'not use'])->default('not use');
            $table->timestamps();
        });
    }

    /**-
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('withdraw_methods');
    }
}
