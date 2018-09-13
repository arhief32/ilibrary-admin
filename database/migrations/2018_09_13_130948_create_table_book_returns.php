<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBookReturns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_returns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('user_id')->references('id')->on('users');
            $table->integer('book_id')->references('id')->on('books');
            $table->integer('operator_id')->references('id')->on('operators');
            $table->integer('penalty_id')->references('id')->on('penalties');
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
        Schema::dropIfExists('book_returns');
    }
}
