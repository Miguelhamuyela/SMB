<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('startups', function (Blueprint $table) {
<<<<<<< HEAD:database/migrations/2022_01_26_132902_create_startups_table.php

=======
            $table->id();
>>>>>>> 51b3f8c6e3fc0ab900dc0f4cb832e89dea8b2f68:database/migrations/2022_01_26_113700_create_startups_table.php
            $table->string('name');
            $table->string('roomName');
            $table->string('site');
            $table->string('email');
            $table->string('tel');
            $table->string('nif');
<<<<<<< HEAD:database/migrations/2022_01_26_132902_create_startups_table.php

            $table->foreign('fk_Scheldules_id')->references('id')->on('scheldules')->onDelete('CASCADE')->onUpgrade('CASCADE');

           
=======
            $table->unsignedBigInteger('fk_Scheldules_id');
            $table->foreign('fk_Scheldules_id')->references('id')->on('scheldules');
            
            $table->unsignedBigInteger('fk_Payments_id');
            $table->foreign('fk_Payments_id')->references('id')->on('payments');
>>>>>>> 51b3f8c6e3fc0ab900dc0f4cb832e89dea8b2f68:database/migrations/2022_01_26_113700_create_startups_table.php

            $table->id();
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
        Schema::dropIfExists('startups');
    }
}
