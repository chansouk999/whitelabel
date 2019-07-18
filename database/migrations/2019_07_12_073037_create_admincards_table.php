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
        Schema::dropIfExists('admincards');
        Schema::create('admincards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('addedby');
            $table->string('rule_id', 10)->nullable();
            $table->string('bankname', 30);
            $table->string('bankAccount', 30);
            $table->string('branch', 50);
            $table->string('owner', 100);
            $table->text('address');
            $table->text('level')->nullable();
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
