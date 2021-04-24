<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->increments('id');
<<<<<<< HEAD
=======
            $table->string('club_name');
            $table->integer('nbr_adherant');
            $table->enum('categorie', ['scientifique', 'culturelle', 'artistique']);
            $table->string('chair_name');
>>>>>>> 3d33934608ace913a3e0e74e366268c7d4c4cb28
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
        Schema::dropIfExists('clubs');
    }
}
