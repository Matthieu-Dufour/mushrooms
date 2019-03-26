<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMushroomEcologieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mushroom_ecologie', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('mushroom_id');
            $table->string('ecologie_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mushroom_ecologie');
    }
}
