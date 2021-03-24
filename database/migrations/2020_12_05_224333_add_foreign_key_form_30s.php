<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyForm30s extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form_30s', function (Blueprint $table) {
           
            $table->foreign('advisor_id')->references('id')->on('users')->cascadeOnDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->cascadeOnDelete('cascade');
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
