<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('staz_partenza', 40);
            $table->string('staz_arrivo', 40);
            $table->date('data_partenza');
            $table->date('data_arrivo');
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->bigInteger('cod_treno'); // Eventualmente una chiave esterna ad un'altra tabella
            $table->boolean('in_orario');
            $table->boolean('cancellato');
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
};
