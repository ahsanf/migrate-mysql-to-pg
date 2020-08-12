<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogTokoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_toko', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('id_file_pkm');
			$table->bigInteger('id_toko');
			$table->integer('tipe_log_toko');
			$table->string('siup_log');
			$table->string('npwp_log')->nullable();
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
		Schema::drop('log_toko');
	}

}
