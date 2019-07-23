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



        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::dropIfExists('announcements');
        Schema::create('announcements', function (Blueprint $table) {
            $table->string('AnouncementID', 10);
            $table->enum('method', ['PA', 'NA']);
            $table->text('message');
            $table->text('userID')->nullable();
            $table->string('post_by', 50)->nullable();
            $table->primary('AnouncementID');
            $table->timestamps();
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
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
