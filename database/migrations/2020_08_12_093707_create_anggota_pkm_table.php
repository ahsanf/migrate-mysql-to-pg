<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnggotaPkmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anggota_pkm', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('id_file_pkm')->unsigned()->index('anggota_pkm_id_file_pkm_foreign');
			$table->bigInteger('id_mahasiswa')->unsigned()->index('anggota_pkm_id_mahasiswa_foreign');
			$table->enum('jabatan', array('Ketua','Anggota 1','Anggota 2','Anggota 3','Anggota 4','Anggota 5','Anggota 6','Anggota 7','Anggota 8','Anggota 9','Anggota 10'));
			$table->enum('acc_anggota', array('Y','N'))->default('N');
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
		Schema::drop('anggota_pkm');
	}

}
