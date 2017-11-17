<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AboutData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('About_Data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('student_id');
            $table->string('email');
            $table->string('facebook');
            $table->string('line');
            $table->string('portrait');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('About_Data');
    }
}
