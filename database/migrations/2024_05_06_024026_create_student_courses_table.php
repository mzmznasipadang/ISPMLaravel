<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('StudentCourse', function (Blueprint $table) {
            $table->id('StudentCourseID');
            $table->foreignId('CourseID')->constrained();
            $table->foreignId('StudentID')->constrained();
            $table->string('StudentGrade', 5);
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
        Schema::dropIfExists('StudentCourse');
    }
}
