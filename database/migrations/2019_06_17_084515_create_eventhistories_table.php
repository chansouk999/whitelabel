<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventhistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventhistories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('Time');
            $table->string('user_id',20);
            $table->string('event',30);
            $table->string('reference',20);
            $table->double('balance_before_event',20,2);
            $table->double('amount',20,2);
            $table->double('balance_after_event',20,2);
            $table->text('deatil');
            $table->string('served_by',20);
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
        Schema::dropIfExists('eventhistories');
    }
}
