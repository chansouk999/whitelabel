<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmincardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admincards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bankname', 30);
            $table->string('bankAccount', 30);
            $table->string('branch', 50);
            $table->string('owner', 100);
            $table->text('address');
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
        Schema::dropIfExists('admincards');
    }
}
