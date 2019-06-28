<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('admin_accesses');
        Schema::create('admin_accesses', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->integer('admin_id')->unsigned();
             $table->integer('Player');
             $table->integer('Gameble');
             $table->integer('Gameresult');
             $table->integer('Withdraw_topup');
             $table->integer('Timeline');
             $table->integer('playerrecord');
             $table->integer('agentInfo');
             $table->integer('SHinfo');
             $table->integer('agenttransaction');
             $table->integer('Request');
             $table->integer('Anouncement');
             $table->integer('ManageRecord');
             $table->integer('SelfRolling');
             $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
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
        Schema::dropIfExists('admin_accesses');
    }
}
