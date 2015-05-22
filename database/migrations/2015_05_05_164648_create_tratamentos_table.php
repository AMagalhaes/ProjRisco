<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTratamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */ 
	public function up()
	{
		Schema::create('tratamentos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descricao');
			$table->string('controlo');
			$table->string('beneficios');
			$table->string('obs_final');

			$table->integer('risco_id')->unsigned();
			$table->foreign('risco_id')->references('id')->on('riscos');

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
		Schema::drop('tratamentos');
	}

}
