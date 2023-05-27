<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('courseName');
            $table->string("start");
            $table->string("duration");
            $table->string("depart");
          //  $table->unsignedBigInteger('fk_users_id');
          //  $table->foreign('fk_users_id')->references('id')->on('users')->onDelete('CASCADE')->onUpgrade('CASCADE');
          //  $table->unsignedBigInteger('fk_departaments_id');
           // $table->foreign('fk_departaments_id')->references('id')->on('departaments')->onDelete('CASCADE')->onUpgrade('CASCADE');
          //  $table->longText("obs");
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
        Schema::dropIfExists('courses');
    }
}
