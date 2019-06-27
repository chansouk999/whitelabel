<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelfservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('selfservices');

        Schema::create('selfservices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',20)->nullable();
            $table->string('level',20)->nullable();
            $table->double('Amount',20,2)->nullable();
            $table->double('percentage',10,2)->nullable();
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
        Schema::dropIfExists('selfservices');
    }
}
