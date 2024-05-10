<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentPeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RecruitmentPeriod', function (Blueprint $table) {
            $table->id('PeriodID');
            $table->string('PeriodName', 255);
            $table->string('Batch', 255);
            $table->date('DateStart');
            $table->date('DateEnd');
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
        Schema::dropIfExists('RecruitmentPeriod');
    }
}
