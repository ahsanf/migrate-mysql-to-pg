<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDosenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dosen', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('id_fakultas')->unsigned();
			$table->string('npwp_dosen')->nullable();
			$table->string('karpeg_dosen')->nullable();
			$table->string('nip_dosen')->nullable();
			$table->string('nidk_dosen')->nullable();
			$table->string('nidn_dosen')->nullable();
			$table->string('nama_dosen');
			$table->string('email_dosen')->nullable();
			$table->string('tempatlahir_dosen')->nullable();
			$table->string('tanggallahir_dosen')->nullable();
			$table->enum('jns_kel_dosen', array('L','P'))->nullable();
			$table->enum('goldar_dosen', array('A','B','AB','O','-'))->nullable();
			$table->text('alamat_dosen')->nullable();
			$table->string('pensiun_dosen')->nullable();
			$table->string('agama_dosen')->nullable();
			$table->string('grup_pegawai_dosen')->nullable();
			$table->string('keaktifan_dosen')->nullable();
			$table->string('jns_pegawai_dosen')->nullable();
			$table->string('prodi_dosen')->nullable();
			$table->string('jabatan_dosen')->nullable();
			$table->string('jabatan_ak_dosen')->nullable();
			$table->string('gol_dosen')->nullable();
			$table->string('pangkat_dosen')->nullable();
			$table->string('jenjang_pendidikan_dosen')->nullable();
			$table->string('tempat_pendidikan_dosen')->nullable();
			$table->string('prodi_pendidikan_dosen')->nullable();
			$table->string('keahlian')->nullable();
			$table->string('simbel_akun')->nullable();
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
		Schema::drop('dosen');
	}

}
