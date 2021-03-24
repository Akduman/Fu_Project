<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusFsa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('f_s_a_forms', function (Blueprint $table) {
            $table->boolean('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('f_s_a_forms', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            Schema::dropIfExists('f_s_a_forms');
            Schema::enableForeignKeyConstraints();
        });
    }
}
