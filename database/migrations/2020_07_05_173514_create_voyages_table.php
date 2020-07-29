<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();
            $table->integer('camion_id')->unsigned();
            $table->foreign('camion_id')
                ->references('id')
                ->on('camions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('nombreBL');
            $table->string('destination');
            $table->string('produit');
            $table->double('quantite');
            $table->double('prixUnitaire');
            $table->double('montantBrute');
            $table->double('retenues');
            $table->double('net');
            $table->double('carburant');
            $table->double('frais');
            $table->double('pontBascule');
            $table->double('rapido');
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
        Schema::dropIfExists('voyages');
    }
}
