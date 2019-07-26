<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('announcements');
        Schema::create('announcements', function (Blueprint $table) {
            $table->string('AnouncementID', 10)->index();
            $table->enum('method', ['PA', 'NA']);
            $table->text('message');
            $table->text('userID')->nullable();
            $table->string('post_by', 50)->nullable();
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
        Schema::dropIfExists('announcements');
    }
}
