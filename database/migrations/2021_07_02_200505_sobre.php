<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sobre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sobre', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('text')->nullable();
            $table->timestamps();
            
            //$table->foreign('produtos')->references('id')->on('produtos')->onDelete('cascade');
        });
        //
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
