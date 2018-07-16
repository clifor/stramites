<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlujoDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flujo_docs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_doc_id')->unsigned();
            $table->integer('n_reg');
            $table->string('desc_doc');
            $table->date('fecha');
            $table->string('asunto');
            $table->string('emisor');
            $table->string('archivo');
            $table->integer('responsable_id')->unsigned();
            $table->string('se_adjunta');
            $table->integer('doc_ref')->nullable();
            $table->integer('area_destino')->nullable()->unsigned();
            $table->integer('estado')->nullable(); //En curso, finalizado, etc

            $table->foreign('tipo_doc_id')->references('id')->on('tipo_docs')->onDelete('cascade');
            $table->foreign('responsable_id')->references('id')->on('responsables')->onDelete('cascade');
            //$table->foreign('doc_ref')->references('id')->on('flujo_docs')->onDelete('cascade'); 
            $table->foreign('area_destino')->references('id')->on('oficinas')->onDelete('cascade');           
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
        Schema::dropIfExists('flujo_docs');
    }
}
