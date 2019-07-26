<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReplyAnnouncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reply_announces', function (Blueprint $table) {
            $table->string('user_id', 30);
            $table->string('chater_id', 30);
            $table->string('adminId', 30);
            $table->string('chatId', 30);
            $table->primary('chatId');
            $table->string('anou_id', 10)->references('AnouncementID')->on('announcements')->onDelete('cascade');
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
        Schema::dropIfExists('reply_announces');
    }
}
