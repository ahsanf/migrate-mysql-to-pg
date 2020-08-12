<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkimPkmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('skim_pkm', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('id_tipe_pkm')->unsigned()->index('skim_pkm_id_tipe_pkm_foreign');
			$table->string('skim_singkat', 10);
			$table->string('skim_lengkap', 50);
			$table->string('minimal_skim')->nullable();
			$table->string('maksimal_skim')->nullable();
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
		Schema::drop('skim_pkm');
	}

}
