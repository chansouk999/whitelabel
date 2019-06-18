<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_transaction', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('Time');
            $table->string('agent_id',20);
            $table->double('amount',20,2);
            $table->string('currency',20);
            $table->string('method',2);
            $table->string('assistAdmin',20);
            $table->string('reference',20);
            $table->timestamps();
        });
    }
    // TIME	USER	AMOUNT	CURRENCY	METHOD	AAIST ADMIN	REFERENCE	ACTION
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finances');
    }
}
