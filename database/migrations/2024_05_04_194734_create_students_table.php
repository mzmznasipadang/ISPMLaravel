<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Student', function (Blueprint $table) {
            $table->id('StudentID');
            $table->integer('NIM');
            $table->foreignId('UserID')->constrained('Users')->nullable();
            $table->foreignId('MajorID')->constrained('CampusMajor');
            $table->foreignId('RegionID')->constrained('CampusRegion');
            $table->foreignId('StreamCourseID')->constrained('CampusStreamCourse')->nullable();
            $table->string('Name', 255);
            $table->string('Domicile', 255);
            $table->string('ActiveStatus', 255);
            $table->float('GPA', 10, 2);
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
        Schema::dropIfExists('Student');
    }
}
