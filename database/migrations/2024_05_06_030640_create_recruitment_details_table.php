<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RecruitmentDetail', function (Blueprint $table) {
            $table->id('DetailID');
            $table->foreignId('TypedID')->constrained();
            $table->foreignId('PeriodID')->constrained();
            $table->foreignId('MajorID')->constrained();
            $table->integer('Binusian');
            $table->integer('RequirementGPA');
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
        Schema::dropIfExists('RecruitmentDetail');
    }
}
