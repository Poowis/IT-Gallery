<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlbumsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Albums_Data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_of_album');
            $table->string('uploader');
            $table->string('description')->nullable();
            $table->timestamp('time_upload');
            $table->text('cover');
            $table->integer('number_of_images');
            $table->text('images');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Albums_Data');
    }
}
