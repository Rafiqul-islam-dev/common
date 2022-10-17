<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudenCornersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studen_corners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name1');
            $table->string('name2');
            $table->string('name3');
            $table->string('title1');
            $table->string('title2');
            $table->string('title3');
            $table->string('description1');
            $table->string('description2');
            $table->string('description3');
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
        Schema::dropIfExists('studen_corners');
    }
}
