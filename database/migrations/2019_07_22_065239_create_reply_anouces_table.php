<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReplyAnoucesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply_anouces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('anou_id', 10);
            $table->string('chater_id',30);
            $table->text('msg');
            $table->tinyInteger('owner')->nullable();
            $table->timestamps();
            $table->foreign('anou_id')->references('AnouncementID')->on('announcements')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reply_anouces');
    }
}
