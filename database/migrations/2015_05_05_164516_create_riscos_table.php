<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiscosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('riscos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('vulnerabilidade');
			$table->string('ameaca');
			$table->string('consequencia');
			$table->string('probabilidade');
			$table->string('impacto');
			$table->string('obs_final');

			$table->integer('activo_id')->unsigned();
			$table->foreign('activo_id')->references('id')->on('activos');


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
		Schema::drop('riscos');
	}

}
