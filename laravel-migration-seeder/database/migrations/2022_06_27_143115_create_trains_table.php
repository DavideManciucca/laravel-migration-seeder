<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda');
            $table->string('partenza');
            $table->string('arrivo');
            $table->time('orario_partenza',0);
            $table->time('orario_arrivo',0);
            $table->float('codie_treno',4);
            $table->double('numero_carrozze');
            $table->boolean('corsa_cancellata')->default(0);
            $table->boolean('in_orario')->default(1);
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
        Schema::dropIfExists('trains');
    }
}
