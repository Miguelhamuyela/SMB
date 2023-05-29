<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_years', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_students_id');
            $table->foreign('fk_students_id')->references('id')->on('students')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_course_id');
            $table->foreign('fk_course_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->string('typeStudent');
            $table->longText('level');
            $table->string('period');
            $table->string('startYear');
            $table->string('start');
            $table->string('address')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('student_years');
    }
}
