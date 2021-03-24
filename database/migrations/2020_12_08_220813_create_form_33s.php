<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm33s extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_33s', function (Blueprint $table) {
            $table->id();            
            $table->string('location');
            $table->bigInteger('chairman_id')->unsigned();
            $table->bigInteger('invitation_1')->unsigned();
            $table->bigInteger('invitation_2')->unsigned();
            $table->bigInteger('form_31_id')->unsigned()->unique(); 
            $table->timestamps();          

            $table->foreign('chairman_id')->references('id')->on('users')->cascadeOnDelete('cascade');
            $table->foreign('invitation_1')->references('id')->on('users')->cascadeOnDelete('cascade');
            $table->foreign('invitation_2')->references('id')->on('users')->cascadeOnDelete('cascade');


            $table->foreign('form_31_id')->references('id')->on('form_31s')->cascadeOnDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_33s');
    }
}
