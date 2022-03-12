<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatereviwTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviw', function (Blueprint $table) {
            $table->increments('id');
  $table->string('tittle');
  $table->staring('body',300);
  $table->staring('body',300);
    $table->unsignedBigInteger('user_id')->default(0);
      $table->integer('stars')->default(0);
     $table->unsignedBigInteger('game_id')->default(0);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviw');
    }
};
