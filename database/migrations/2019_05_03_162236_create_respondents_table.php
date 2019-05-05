<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespondentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respondents', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->boolean('response1');
          $table->boolean('response2')->nullable();
          $table->boolean('response3')->nullable();
          $table->boolean('response4')->nullable();
          $table->boolean('response5')->nullable();
          $table->boolean('response6')->nullable();
          $table->boolean('response7')->nullable();
          $table->boolean('response8')->nullable();
          $table->boolean('response9')->nullable();
          $table->boolean('response10')->nullable();
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
        Schema::dropIfExists('respondents');
    }
}
