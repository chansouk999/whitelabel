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
        Schema::create('withdraw_methods', function (Blueprint $table) {
            $table->string('userName',5);
            $table->integer('bankAccount');
            $table->string('registerProvince',5);
            $table->string('registerCity',10);
            $table->string('branch',50);
            $table->primary(['bankAccount']);
            $table->timestamps();
        });
         DB::statement('ALTER TABLE withdraw_methods CHANGE bankAccount bankAccount INT(25) NOT NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('withdraw_methods');
    }
}