<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRollingHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rolling_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id', 20);
            $table->double('amount', 20, 2)->nullable();
            $table->double('last_totalbet', 20, 2)->nullable();
            $table->enum('status', ['pay', 'not pay'])->default('not pay');
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
        Schema::dropIfExists('rolling_histories');
    }
}
