<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
          $table->bigIncrements('id')->unsigned();
          $table->string('ownerFirstName');
          $table->string('ownerLastName');
          $table->string('ownerEmail');
          $table->string('ownerUsername')->unique();
          $table->string('ownerPassword');
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
        Schema::dropIfExists('registers');
    }
}
