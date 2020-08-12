<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePerubahanAnggotaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perubahan_anggota', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->integer('id_file_pkm');
			$table->integer('id_anggota');
			$table->integer('status_perubahan');
			$table->enum('status_acc', array('Y','N'))->nullable();
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
		Schema::drop('perubahan_anggota');
	}

}
