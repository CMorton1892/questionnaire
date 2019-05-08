<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /**
       * Attempt to add foreign key to questions migration
       */
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('questionnaire_id')->nullable()->unsigned();
            $table->foreign('questionnaire_id')
              ->references('id')->on('questionnaires')
              ->onDelete('cascade');
            $table->string('question1');
            $table->string('question2');
            $table->string('question3');
            $table->string('question4');
            $table->string('question5');
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
        Schema::dropIfExists('questions');
    }
}
