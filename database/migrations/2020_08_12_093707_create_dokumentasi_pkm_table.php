<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDokumentasiPkmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dokumentasi_pkm', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->integer('id_file_pkm');
			$table->string('img', 100)->nullable();
			$table->text('ket_dok')->nullable();
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
		Schema::drop('dokumentasi_pkm');
	}

}
