<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfissionaisTechnology extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissionais_technology', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profissionais_id');
            $table->foreign('profissionais_id')->references('id')->on('profissionais');
            $table->unsignedBigInteger('technologies_id');
            $table->foreign('technologies_id')->references('id')->on('technologies');
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
        Schema::dropIfExists('profissionais_technology');
    }
}
