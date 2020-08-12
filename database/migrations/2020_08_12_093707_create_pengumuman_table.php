<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePengumumanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pengumuman', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('judul');
			$table->text('deskrisi', 65535);
			$table->text('file', 65535);
			$table->enum('tipe', array('info','warning','danger'))->default('info');
			$table->text('stub', 65535);
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
		Schema::drop('pengumuman');
	}

}
