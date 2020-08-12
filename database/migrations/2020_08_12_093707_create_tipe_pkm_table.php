<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipePkmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipe_pkm', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('tipe', 50);
			$table->boolean('status_upload')->default(0);
			$table->integer('status_tambah')->nullable();
			$table->integer('status_edit')->nullable();
			$table->integer('status_hapus')->nullable();
			$table->boolean('status_kemajuan')->default(0);
			$table->boolean('status_akhir')->default(0);
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
		Schema::drop('tipe_pkm');
	}

}
