<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTahunPkmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tahun_pkm', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('tahun', 8);
			$table->text('keterangan', 65535)->nullable();
			$table->boolean('aktif')->default(0);
			$table->string('kementrian_lengkap')->nullable();
			$table->string('kementrian_singkat')->nullable();
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
		Schema::drop('tahun_pkm');
	}

}
