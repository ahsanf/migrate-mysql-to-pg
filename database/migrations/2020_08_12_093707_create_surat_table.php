<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuratTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('surat', function(Blueprint $table)
		{
			$table->bigInteger('id_surat', true);
			$table->integer('id_file_pkm');
			$table->string('tipe_surat');
			$table->string('nomer_surat')->nullable();
			$table->string('status_surat');
			$table->string('kepada_surat')->nullable();
			$table->string('tujuan_surat')->nullable();
			$table->text('alamat_tujuan_surat')->nullable();
			$table->string('durasi_surat')->nullable();
			$table->string('tgl_pengajuan');
			$table->string('tgl_pengambilan')->nullable();
			$table->string('ket_surat')->nullable();
			$table->string('no_wa', 15)->nullable();
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
		Schema::drop('surat');
	}

}
