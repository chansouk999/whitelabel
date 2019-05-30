<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopuphistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topuphistories', function (Blueprint $table) {
            $table->string('referenceNo',11);
            $table->double('topUpAmount',20,2);
            $table->dateTime('topUpDate');
            $table->string('methodID',2);
            $table->string('method',15);
            $table->primary('referenceNo');
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
        Schema::dropIfExists('topuphistories');
    }
}
