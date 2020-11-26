<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('componen', function (Blueprint $table) {
            //$table->id();
            $table->foreignId('aliment_id')->references('id')->on('alimentos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreignId('receta_id')->references('id')->on('receta')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->integer('cantidad');
            // $table->integer('alimento_id')->unsigned();
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
        Schema::dropIfExists('componen');
    }
}
