<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmincardHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admincard_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rule_id', 10)->nullable();
            $table->string('bankname', 30);
            $table->string('bankAccount', 30);
            $table->string('branch', 50);
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
        Schema::dropIfExists('admincard_histories');
    }
}
