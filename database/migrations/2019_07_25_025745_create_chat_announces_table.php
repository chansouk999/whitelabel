<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatAnnouncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('chat_announces');
        Schema::create('chat_announces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('chatId',30);
            $table->string('from',30);
            $table->string('to',30);
            $table->text('conversationMsg');
            $table->tinyInteger('owner');
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
        Schema::dropIfExists('chat_announces');
    }
}
