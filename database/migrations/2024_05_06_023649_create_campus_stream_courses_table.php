<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampusStreamCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CampusStreamCourse', function (Blueprint $table) {
            $table->id('StreamCourseID');
            $table->foreignId('MajorID')->constrained();
            $table->string('StreamCourseName', 255);
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
        Schema::dropIfExists('CampusStreamCourse');
    }
}
