<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableExpresiones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expresiones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('materna');
            $table->string('expresion');
            // determina a que grupo de expresiones vamos a poner
            $table->integer('categoria_id')->unsigned();
            $table->foreignkey('categoria_id')->references('id')->on('categorias');
            // determina de que idioma extranjero viene
            $table->integer('idioma_id')->unsigned();
            $table->foreignkey('idioma_id')->references('id')->on('idiomas');

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
        Schema::dropIfExists('expresiones');
        Schema::enableForeignKeyConstraints();

        $table->dropForeign(['categoria_id','idioma_id']);
    }
}
