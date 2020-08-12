<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFakultasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fakultas', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('nama_fakultas', 50);
			$table->string('nama_singkat', 5);
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
		Schema::drop('fakultas');
	}

}
