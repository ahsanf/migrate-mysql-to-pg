<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOperatorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('operator', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('id_user');
			$table->string('nama_operator', 50);
			$table->bigInteger('id_fakultas')->unsigned()->index('operator_id_fakultas_foreign');
			$table->text('quotes')->nullable();
			$table->string('logo')->nullable();
			$table->enum('tipe_quote', array('Peringatan','Pengumuman','Quote'))->default('Quote');
			$table->string('gambar_pengumuman');
			$table->enum('tipe_gambar', array('Peringatan','Pengumuman','Info'))->default('Info');
			$table->string('instagram_operator')->nullable();
			$table->text('opt_status', 65535)->nullable();
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
		Schema::drop('operator');
	}

}
