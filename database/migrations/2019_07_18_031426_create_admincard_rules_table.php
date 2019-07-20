<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmincardRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('admincard_rules');
        Schema::create('admincard_rules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rulename', 100);
            $table->string('rule_level', 10);
            $table->tinyInteger('level');
            $table->string('localted', 30);
            $table->string('inAnd', 50)->nullable();
            $table->string('Notin', 50)->nullable();
            $table->string('amoute', 30);
            $table->string('from', 50)->nullable();
            $table->string('to', 50)->nullable();
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
        Schema::dropIfExists('admincard_rules');
    }
}
