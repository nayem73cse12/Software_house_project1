<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionTable',function (Blueprint $table)
        {
              $table->increments('question_id');
              $table->string('question');
              $table->string('optoion_1');
              $table->string('optoion_2');
              $table->string('optoion_3');
              $table->string('optoion_4');
              $table->string('correct_ans');
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
        //
    }
}
