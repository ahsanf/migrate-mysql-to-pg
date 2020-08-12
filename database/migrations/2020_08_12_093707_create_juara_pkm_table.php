<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJuaraPkmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('juara_pkm', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->integer('id_file_pkm');
			$table->enum('juara', array('Juara 1 Presentasi','Juara 2 Presentasi','Juara 3 Presentasi','Juara Favorit Presentasi','Juara 1 Poster','Juara 2 Poster','Juara 3 Poster','Juara Favorit Poster'));
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
		Schema::drop('juara_pkm');
	}

}
