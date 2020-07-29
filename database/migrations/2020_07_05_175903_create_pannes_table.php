<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePannesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pannes', function (Blueprint $table) {
            $table->id();
            $table->integer('camion_id')->unsigned();
            $table->foreign('camion_id')
                ->references('id')
                ->on('camions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->text('pannes');
            $table->double('montant');
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
        Schema::dropIfExists('pannes');
    }
}
