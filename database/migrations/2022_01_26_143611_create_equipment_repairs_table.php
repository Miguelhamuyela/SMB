<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_repairs', function (Blueprint $table) {
            $table->id();
            $table->string('equipmentName');
            $table->string('model');
            $table->string('image');
            $table->longText('problemDetails');
            $table->string('reference');
            $table->string('color', 50);


            $table->unsignedBigInteger('fk_Scheldules_id');
            $table->foreign('fk_Scheldules_id')->references('id')->on('scheldules');

            $table->unsignedBigInteger('fk_Payments_id');
            $table->foreign('fk_Payments_id')->references('id')->on('payments');


            $table->unsignedBigInteger('fk_Employees_id');
            $table->foreign('fk_Employees_id')->references('id')->on('employees');

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
        Schema::dropIfExists('equipment_repairs');
    }
}
