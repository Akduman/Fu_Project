<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFSAFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_s_a_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name_surname');
            $table->string('email');
            $table->string('phone');            
            $table->string('passport')->unique();    
            $table->string('graduation_document')->unique();            
            $table->string('language_document')->unique();  
            $table->string('transcript')->unique(); 
            $table->double('graduation_average');
            $table->string('explanation')->nullable(); 
            $table->bigInteger('department_id')->unsigned();                                          
            $table->timestamps();             
            $table->foreign('department_id')->references('id')->on('departments')->delete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('f_s_a_forms');
    }
}
