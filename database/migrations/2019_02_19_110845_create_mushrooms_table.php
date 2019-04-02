<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Concerns\UsesUuid;

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
            $table->string('name')->nullable(true);
            $table->string('nameLatin')->nullable(false);
            $table->string('surnom')->nullable(true);
            $table->string('odeur')->nullable(true)->unsigned();
            $table->string('comestible')->nullable(true)->unsigned();
            $table->string('ecologie')->nullable(true)->unsigned();
            $table->string('chapeau')->nullable(true);
            $table->string('lames')->nullable(true);
            $table->string('pied')->nullable(true);
            $table->string('chair')->nullable(true);
            $table->string('type_trophique')->nullable(true);
            $table->string('groupe')->nullable(true)->unsigned();
            $table->string('image')->nullable(true);
            $table->timestamps();
        });

        Schema:: table('Mushroom', function(Blueprint $table){
            $table->foreign('comestible')->references('id')->on('Comestibilité');
            $table->foreign('ecologie')->references('id')->on('Ecologie');
            $table->foreign('groupe')->references('id')->on('Groupe');
            $table->foreign('odeur')->references('id')->on('Odeur');
            $table->foreign('type_trophique')->references('id')->on('Type_Trophique');
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
