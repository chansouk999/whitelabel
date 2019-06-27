<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('image_transfers');
        Schema::create('image_transfers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('refer',30);
            $table->integer('agent_id');
            $table->string('imgid',20)->nullable();
            $table->string('imgname',100)->nullable();
            $table->text('imgdesc')->nullable();
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
        Schema::dropIfExists('image_transfers');
    }
}
