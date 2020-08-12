<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOtherPkmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('other_pkm', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('id_tahun_pkm')->nullable();
			$table->string('id_skim_pkm')->nullable();
			$table->string('nama_peneliti')->nullable();
			$table->string('univ')->nullable();
			$table->text('judul', 65535)->nullable();
			$table->string('status')->nullable();
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
		Schema::drop('other_pkm');
	}

}
