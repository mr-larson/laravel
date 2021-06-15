<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string("photo");
            $table->string("twitter")->nullable();
            $table->string("facebook")->nullable();
            $table->string("insta")->nullable();
            $table->string("link")->nullable();
            /* $table->foreignId('user_id')->constrained('users')->onDelete("cascade")->onUpdate("cascade"); */
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
        Schema::dropIfExists('teams');
    }
}
