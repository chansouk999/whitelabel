<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('access_records');
        Schema::create('access_records', function (Blueprint $table) {
            $table->integer('id');
            $table->dateTime('time')->nullable();
            $table->string('password');
            $table->string('login_status');
            $table->string('login_IP', 25)->nullable();
            $table->string('online_period');
            $table->string('user_id', 20);
            // $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
        // DB::statement('ALTER TABLE `access_records` CHANGE `id` `id` int(11)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('access_records');
    }
}
