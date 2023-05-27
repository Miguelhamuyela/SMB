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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father');
            $table->string('startYear');
        //    $table->string('mather');
         //   $table->string('borthday');
          //  $table->string('identification');
          //  $table->string('arquiv');
          //  $table->string('tel');
          //  $table->string('genro');
          //  $table->string('municipeName');
          //  $table->string('startYear');
           // $table->string('address')->nullable();
          //  $table->unsignedBigInteger('fk_course_id');
          //  $table->foreign('fk_course_id')->references('id')->on('courses')->onDelete('CASCADE')->onUpgrade('CASCADE');
          //  $table->unsignedBigInteger('fk_provinces_id');
         //   $table->foreign('fk_provinces_id')->references('id')->on('provinces')->onDelete('CASCADE')->onUpgrade('CASCADE');
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
        Schema::dropIfExists('students');
    }
}
