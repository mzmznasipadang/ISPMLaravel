<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentScoreRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RecruitmentScoreRequirement', function (Blueprint $table) {
            $table->id('RecruitmentID');
            $table->foreignId('CourseID')->constrained();
            $table->foreignId('DetailID')->constrained();
            $table->float('CourseScoreMin', 5);
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
        Schema::dropIfExists('RecruitmentScoreRequirement');
    }
}
