<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm30s extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_30s', function (Blueprint $table) {
            $table->id();
            $table->string('name_surname');
            $table->integer('student_no')->unsigned()->unique();
            $table->bigInteger('department_id')->unsigned();
            $table->string('sub_department');
            $table->bigInteger('advisor_id')->unsigned();

            $table->string('tr_title');
            $table->string('en_title');
            $table->boolean('language');
            $table->boolean('exp');
            $table->boolean('teo');
            $table->boolean('sim');
            $table->boolean('sys_dev');
            $table->boolean('analys');
            $table->string('industrial_sector')->nullable();

            $table->string('permission_1')->nullable();
            $table->string('permission_2')->nullable();
            $table->string('permission_3')->nullable();
           // $table->boolean('form_31'); 
            $table->boolean('form_32');           
            $table->string('token')->unique()->nullable();
            
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('form_30s');
        Schema::enableForeignKeyConstraints();
    }
}
