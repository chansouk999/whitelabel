<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agen_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('Time');
            $table->string('agentId');
            $table->double('amount',20,2);
            $table->string('currency',10);
            $table->string('methodId',2);
            $table->string('assitid',30);
            $table->string('reference',30);
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
        Schema::dropIfExists('agen_transactions');
    }
}
