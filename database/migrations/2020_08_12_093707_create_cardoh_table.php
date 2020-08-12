<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardohTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cardoh', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('tipe_cardoh');
			$table->bigInteger('id_tahun_pkm')->unsigned();
			$table->bigInteger('id_mahasiswa')->unsigned();
			$table->integer('jml_anggota')->nullable();
			$table->text('kebutuhan', 65535)->nullable();
			$table->text('ide_kasar', 65535)->nullable();
			$table->text('cardoh_skill', 65535)->nullable();
			$table->string('cardoh_skim')->nullable();
			$table->string('show_kontak')->nullable();
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
		Schema::drop('cardoh');
	}

}
