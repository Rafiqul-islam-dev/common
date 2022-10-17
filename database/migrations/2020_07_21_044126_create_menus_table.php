<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**.
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('MenuName');
            $table->string('MenunameBangla')->nullable();
            $table->integer('Possition')->default(0);
            $table->integer('Is_Active')->default(0);
            $table->integer('ParentId');
            $table->string('url')->nullable();
            $table->string('StaticMenuUrl')->nullable();
            $table->string('StaticViewUrl')->nullable();
            $table->integer('class')->default(0);
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
        Schema::dropIfExists('menus');
    }
}

