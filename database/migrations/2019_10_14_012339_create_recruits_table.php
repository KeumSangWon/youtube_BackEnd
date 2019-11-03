<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');//fotringKey 설정
            $table->string('title', 255);
            $table->bigInteger('salary_id')->unsigned();
            $table->foreign('salary_id')->references('id')->on('salaries');
            $table->bigInteger('career_id')->unsigned();
            $table->foreign('career_id')->references('id')->on('careers');
            $table->bigInteger('recruitment_id')->unsigned();
            $table->foreign('recruitment_id')->references('id')->on('recruitments');
            $table->bigInteger('gender_id')->unsigned();
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->String('video_file', 255);
            $table->string('textra', 255);
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
        Schema::dropIfExists('recruits');
    }
}
