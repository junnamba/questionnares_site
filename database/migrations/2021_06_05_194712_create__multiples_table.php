<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultiplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('multiples', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('choice_id');
            $table->string('choice_text',256);
            $table->timestamps();
            $table->foreign('choice_id')->references('id')->on('choices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('multiples');
    }
}
