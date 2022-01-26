<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {

            $table->string('occupation', 255);
            $table->string('email', 255);
            $table->string('tel', 255);
            $table->string('name', 255);
            $table->string('nif', 255);
            $table->foreign('fk_startups_id')->references('id')->on('startups')->onDelete('CASCADE')->onUpgrade('CASCADE');
            
            $table->id();
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
        Schema::dropIfExists('members');
    }
}
