<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_recruit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('recruit_id')->unsigned();
            $table->foreign('recruit_id')->references('id')->on('recruits')->onDelete('cascade')->onUpdate('cascade');//fotringKey 설정
            $table->bigInteger('genre_id')->unsigned();
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade')->onUpdate('cascade');//fotringKey 설정
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
        Schema::dropIfExists('recruit_genres');
    }
}
