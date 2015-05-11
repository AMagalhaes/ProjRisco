<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiscoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('riscos', function(Blueprint $table)
		{
			$table->increments('idRisco');
			$table->integer('idAtivo');
			$table->string('vulnerabilidade');
			$table->string('ameaça');
			$table->string('consequencia');
			$table->integer('probabilidade');
			$table->integer('impacto');
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
