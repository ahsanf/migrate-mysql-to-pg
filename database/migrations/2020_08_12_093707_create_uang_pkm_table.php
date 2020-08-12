<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUangPkmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uang_pkm', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('id_kategori')->nullable();
			$table->bigInteger('id_nota')->nullable();
			$table->string('nama_pembelian')->nullable();
			$table->float('volume', 10, 0)->nullable();
			$table->bigInteger('nominal')->nullable();
			$table->integer('ppn')->nullable();
			$table->integer('pph21')->nullable();
			$table->integer('pph22')->nullable();
			$table->integer('pph23')->nullable();
			$table->integer('pph26')->nullable();
			$table->integer('cek_pembelian')->nullable();
			$table->text('komentar_pembelian')->nullable();
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
		Schema::drop('uang_pkm');
	}

}
