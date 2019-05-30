<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraw_histories', function (Blueprint $table) {
            $table->integer('withdrawID');
            $table->double('Amount',20,2);
            $table->dateTime('withdraw');
            $table->integer('bankAccount',25);
            $table->timestamps();
        });
        DB::statement('ALTER TABLE withdraw_histories CHANGE withdrawID withdrawID INT(27) NOT NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('withdraw_histories');
    }
}
