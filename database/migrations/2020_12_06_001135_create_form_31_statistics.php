<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm31Statistics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_31_statistics', function (Blueprint $table) {
            $table->id();
            $table->boolean('statistic_1');
            $table->boolean('statistic_2');
            $table->integer('statistic_3')->unsigned();
            $table->boolean('statistic_4');
            $table->integer('statistic_5')->unsigned();
            $table->boolean('statistic_6');
            $table->boolean('statistic_7');
            $table->integer('statistic_8')->unsigned();
            $table->integer('statistic_9')->unsigned();
            $table->boolean('statistic_10');
            $table->boolean('statistic_11');
            $table->integer('statistic_12')->unsigned();
            $table->integer('statistic_13')->unsigned();
            $table->tinyInteger('statistic_14')->nullable();
            $table->boolean('statistic_15');
            $table->string('statistic_16');
            
            $table->bigInteger('form_31_id')->unsigned()->unique();    
            $table->timestamps();
        
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
        Schema::dropIfExists('form_31_statistics');
    }
}
