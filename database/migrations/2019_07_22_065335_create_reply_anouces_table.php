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
        Schema::dropIfExists('reply_anouces');
        Schema::create('reply_anouces', function (Blueprint $table) {
            $table->string('anou_id', 10);
            $table->string('user_id',30);
            $table->string('chater_id',30);
            $table->string('adminId',30);
            $table->string('chatId',30);
            $table->timestamps();
            $table->primary('chatId');
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
