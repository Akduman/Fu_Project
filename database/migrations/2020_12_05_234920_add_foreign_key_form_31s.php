<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyForm31s extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_31s', function (Blueprint $table) {
            //$table->foreign('thesis_advisor')->references('id')->on('users')->cascadeOnDelete('cascade');
            $table->foreign('form_30_id')->references('id')->on('form_30s')->cascadeOnDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('form_31s');
        Schema::enableForeignKeyConstraints();
    }
}
