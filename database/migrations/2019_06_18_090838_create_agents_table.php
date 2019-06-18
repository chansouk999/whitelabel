<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('agentId');
            $table->string('typeId',20);
            $table->dateTime('joinTime');
            $table->integer('numberPlayer');
            $table->string('subAgent',20);
            $table->double('balance',20,2);
            $table->double('percentage',20,2);
            $table->double('totalIncome',20,2);
            $table->string('bankAccount',30);
            $table->string('name',50);
            $table->string('province',50);
            $table->string('city',50);
            $table->string('branch',50);
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
        Schema::dropIfExists('agents');
    }
}
