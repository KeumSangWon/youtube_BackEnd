<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitEtcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etc_recruit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('recruit_id')->unsigned();
            $table->foreign('recruit_id')->references('id')->on('recruits')->onDelete('cascade')->onUpdate('cascade');//fotringKey 설정
            $table->bigInteger('etc_id')->unsigned();
            $table->foreign('etc_id')->references('id')->on('etcs')->onDelete('cascade')->onUpdate('cascade');//fotringKey 설정
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
        Schema::dropIfExists('recruit_etcs');
    }
}
