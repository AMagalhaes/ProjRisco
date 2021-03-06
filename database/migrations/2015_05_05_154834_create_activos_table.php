<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivosTable extends Migration {

	/**
	 * Run the migrations.
	 * 
	 * @return void
	 */
	public function up()
	{
		Schema::create('activos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome');
			$table->integer('valor');
			$table->string('obs');
			$table->string('localizacao');
			$table->integer('disponibilidade');
			$table->integer('integridade');
			$table->integer('confidencialidade');
			$table->string('tipo');
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
		Schema::drop('activos');
	}

}
