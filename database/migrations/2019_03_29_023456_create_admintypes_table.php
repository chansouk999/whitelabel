<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmintypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('admintypes');
        Schema::create('admintypes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typeID');
            $table->string('typeName',10);
            $table->timestamps();
        });
        DB::statement('ALTER TABLE admintypes CHANGE typeID typeID INT(7) NOT NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admintypes');
    }
}
