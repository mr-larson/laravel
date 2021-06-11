<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joueurs', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->integer("age");
            $table->string("phone");
            $table->string("email");
            $table->foreignId('genre_id')->constrained("genres")->onDelete("cascade")->onUpdate("cascade");
            $table->string("origine");
            $table->foreignId('role_id')->constrained("roles")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId('equipe_id')->constrained("equipes")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('joueurs');
    }
}
