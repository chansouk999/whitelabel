<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClToUserdetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('userdetails', function (Blueprint $table) {
            $table->string('bankAccount',50)->nullable();
            $table->string('cardNumber',50)->nullable();
            $table->string('methodId',2)->nullable();
            $table->string('registerProvince',50)->nullable();
            $table->string('registerCity',50)->nullable();
            $table->string('branch',50)->nullable();
            $table->text('desc')->nullable();
            $table->double('Totalbet',20,2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userdetail', function (Blueprint $table) {
            //
        });
    }
}
