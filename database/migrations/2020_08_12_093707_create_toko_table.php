<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTokoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('toko', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('nama_toko');
			$table->text('alamat_toko')->nullable();
			$table->string('npwp_toko')->nullable();
			$table->string('no_npwp_toko')->nullable();
			$table->string('siup_toko')->nullable();
			$table->integer('verify_toko')->nullable()->default(0);
			$table->integer('recomend_toko')->nullable()->default(0);
			$table->string('telepon_toko')->nullable();
			$table->text('jenis_toko')->nullable();
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
		Schema::drop('toko');
	}

}
