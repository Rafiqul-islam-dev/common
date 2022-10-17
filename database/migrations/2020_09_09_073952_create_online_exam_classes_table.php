<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineExamClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_exam_classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('classNameEnglish')->nullable();
            $table->string('classNameBangla')->nullable();
            $table->string('cliassLink')->nullable();
            $table->string('classLinkView')->nullable();
            $table->string('classVersionID')->nullable();
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
        Schema::dropIfExists('online_exam_classes');
    }
}
