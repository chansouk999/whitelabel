<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('chat_histories');
        Schema::create('chat_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('chatId',30);
            $table->string('from',30);
            $table->string('to',30);
            $table->text('conversationMsg');
            $table->foreign('chatId')->references('chatId')->on('reply_anouces')->onDelete('cascade');
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
        Schema::dropIfExists('chat_histories');
    }
}
