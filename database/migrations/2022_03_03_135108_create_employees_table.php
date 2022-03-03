<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tel',20);
            $table->string('email',30);
            $table->string('nif', 30);
            $table->string('photoEmployee', 255)->nullable();
            $table->unsignedBigInteger('fk_departament');
            $table->foreign('fk_departament')->references('id')->on('departments')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->longText('occupation', 255);
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
        Schema::dropIfExists('employees');
    }
}
