<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('categorias', function($table)
        {
            $table->string('id', 120)->primary();
            $table->string('descripción');
        });

        Schema::create('posts', function($table)
        {
            $table->string('id', 120)->primary();
            $table->string('titulo')->unique();
            $table->string('contenido');
            $table->string('imagen')->nullable();
            $table->timestamps();

        });

        Schema::create('categoria_post', function($table)
        {
            $table->string('post_id', 120);
            $table->string('categoria_id', 120);
            $table->primary(array('post_id', 'categoria_id'));
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');


        });

        Schema::create('comentarios', function($table)
        {
            $table->increments('id');
            $table->string('usuario');
            $table->string('contenido');
            $table->string('email');
            $table->string('post');
            $table->integer('respuesta')->nullable()->unsigned();
            $table->foreign('post')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('respuesta')->references('id')->on('comentarios');
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
        Schema::dropIfExists('categoria_post');
        Schema::dropIfExists('comentarios');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('categorias');
	}

}
