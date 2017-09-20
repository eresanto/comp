<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeywordPracownicyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keyword_pracownicy', function (Blueprint $table) {
                $table->integer('pracownicy_id')->unsigned()->nullable();
                $table->foreign('pracownicy_id')->references('id')
                   ->on('pracownicies')->onDelete('cascade');

             $table->integer('keyword_id')->unsigned()->nullable();
             $table->foreign('keyword_id')->references('id')
                   ->on('keywords')->onDelete('cascade');
                   $table->primary(['pracownicy_id','keyword_id']);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keyword_pracownicies');
    }
}
