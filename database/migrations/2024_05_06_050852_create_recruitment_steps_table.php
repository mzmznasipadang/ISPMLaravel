<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RecruitmentStep', function (Blueprint $table) {
            $table->id('StepID');
            $table->foreignId('DetailID')->constrained();
            $table->string('StepName', 255);
            $table->integer('StepOrder');
            $table->string('StepDescription', 255);
            $table->integer('StepScoreMin', 255 );
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
        Schema::dropIfExists('RecruitmentStep');
    }
}
