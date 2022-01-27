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
<<<<<<< HEAD:database/migrations/2022_01_26_135854_create_members_table.php

=======
            $table->id();
            $table->string('occupation');
            $table->string('email');
            $table->string('tel');
            $table->string('name');
            $table->string('nif');
            $table->unsignedBigInteger('fk_startups_id');
            $table->foreign('fk_startups_id')->references('id')->on('startups');
            
            $table->softDeletes();
            $table->timestamps();
>>>>>>> 51b3f8c6e3fc0ab900dc0f4cb832e89dea8b2f68:database/migrations/2022_01_26_115718_create_members_table.php

            $table->string('occupation');
            $table->string('email');
            $table->string('tel');
            $table->string('name');
            $table->string('tel');
            $table->string('nif');

            $table->foreign('fk_startups_id')->references('id')->on('startups')->onDelete('CASCADE')->onUpgrade('CASCADE');

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
        Schema::dropIfExists('members');
    }
}
