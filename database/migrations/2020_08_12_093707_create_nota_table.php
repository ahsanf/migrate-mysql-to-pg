<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nota', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('id_file_pkm')->nullable();
			$table->integer('id_toko')->nullable();
			$table->string('tgl_nota')->nullable();
			$table->string('file_nota')->nullable();
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
		Schema::drop('nota');
	}

}
