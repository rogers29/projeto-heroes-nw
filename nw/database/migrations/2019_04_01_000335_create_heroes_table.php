<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->enum('class', ['Mago', 'Sarcedote', 'Lutador', 'Arqueiro', 'Cavaleiro', 'Espadachin']);
            $table->string('expertise', 150);
            $table->integer('life');
            $table->integer('defense');
            $table->integer('damage');
            $table->double('attack_speed');
            $table->integer('move_speed');
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
        Schema::dropIfExists('heroes');
    }
}