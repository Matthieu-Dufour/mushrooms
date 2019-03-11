<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMushroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mushrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nameLatin');
            $table->string('odeur');
            $table->string('comestible');
            $table->string('ecologie');
            $table->string('chapeau');
            $table->string('lames');
            $table->string('pied');
            $table->string('chair');
            $table->string('sporee');
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
        Schema::dropIfExists('mushrooms');
    }
}
