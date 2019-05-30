<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->string('conversationID',15);
            $table->string('userID',20);
            $table->integer('adminID');
            $table->primary('conversationID');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE conversations CHANGE adminID adminID INT(7) NOT NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conversations');
    }
}