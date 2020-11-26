<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consume', function (Blueprint $table) {
            // $table->integer('usuario_id')->unsigned();
            $table->foreignId('usuario_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            // $table->integer('alimento_id')->unsigned();
            $table->foreignId('alimento_id')->references('id')->on('alimentos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->decimal('cantidad', 5, 2);
            $table->date('fecha');
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
        Schema::dropIfExists('consume');
    }
}
