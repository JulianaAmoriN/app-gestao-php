<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });

        //adicionar o relacionamento na tabela de produtos e produtos produtos_detalhes
        //relacionamento de 1:N
        Schema::table('produtos', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        Schema::table('produtos_detalhes', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remover o relacionamento das tabelas, primeiro a fk e depois a coluna unidade_id
        Schema::table('produtos_detalhes', function(Blueprint $table){
            $table->dropForeign('produtos_detalhes_unidade_id_foreign');
            $table->dropColumn('unidade_id');
        });
        Schema::table('produtos', function(Blueprint $table){
            $table->dropForeign('produtos_unidade_id_foreign');
            $table->dropColumn('unidade_id');
        });
        Schema::dropIfExists('unidades');
    }
}
