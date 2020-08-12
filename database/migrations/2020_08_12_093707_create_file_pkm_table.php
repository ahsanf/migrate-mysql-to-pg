<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilePkmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('file_pkm', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('id_tahun_pkm')->unsigned()->index('file_pkm_id_tahun_pkm_foreign');
			$table->bigInteger('id_skim_pkm')->unsigned()->index('file_pkm_id_skim_pkm_foreign');
			$table->text('judul', 65535);
			$table->text('keyword', 65535)->nullable();
			$table->text('abstrak')->nullable();
			$table->string('dana_pkm')->nullable();
			$table->string('durasi')->nullable();
			$table->text('linkurl', 65535)->nullable();
			$table->string('self')->nullable();
			$table->string('template')->nullable();
			$table->bigInteger('id_dosen')->nullable();
			$table->string('status');
			$table->string('confirm_up')->nullable();
			$table->string('kode_pkm')->nullable();
			$table->string('file_proposal')->nullable();
			$table->string('time_proposal')->nullable();
			$table->string('revisi_proposal')->nullable();
			$table->string('time_revisi_proposal')->nullable();
			$table->string('file_laporan_kemajuan')->nullable();
			$table->string('time_laporan_kemajuan')->nullable();
			$table->string('file_laporan_akhir')->nullable();
			$table->string('time_laporan_akhir')->nullable();
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
		Schema::drop('file_pkm');
	}

}
