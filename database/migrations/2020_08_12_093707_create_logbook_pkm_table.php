<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogbookPkmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logbook_pkm', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_file_pkm');
			$table->string('tgl_logbook');
			$table->text('catatan_logbook');
			$table->string('persen_logbook');
			$table->string('biaya_logbook');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('logbook_pkm');
	}

}
