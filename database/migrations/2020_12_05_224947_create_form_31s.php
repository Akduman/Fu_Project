<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm31s extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_31s', function (Blueprint $table) {
            $table->id();
          //  $table->bigInteger('thesis_advisor')->unsigned();
         // $table->string('subject_scope_3');
            $table->boolean('program',300);
            $table->string('purpose',300);
            $table->string('requirement_1',300);
            $table->string('requirement_2',300);
            $table->string('requirement_3',300);
            $table->string('subject_scope_1',300);
            $table->string('subject_scope_2',300);     
            $table->string('method',300);
            $table->string('org_val',300);
            $table->string('effect',300);
            $table->string('addicted',300);
            $table->bigInteger('form_30_id')->unsigned()->unique();
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
        Schema::dropIfExists('form_31s');
    }
}
