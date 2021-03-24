<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm31SubjectScope3s extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_31_subject_scope_3s', function (Blueprint $table) {
            $table->id();
            $table->string('resource');
            $table->bigInteger('form_31_id')->unsigned();    
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
        Schema::dropIfExists('form_31_subject_scope_3s');
    }
}
