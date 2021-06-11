<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->string("club");
            $table->string("logo")->nullable();
            $table->string("ville");
            $table->string("pays");
            $table->string("max_joueurs");
            $table->integer("att");
            $table->integer("mc");
            $table->integer("df");
            $table->integer("rc");
            $table->foreignId("continent_id")->constrained("continents")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('equipes');
    }
}
