<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNilaiPkmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nilai_pkm', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('id_file_pkm')->unsigned()->index('nilai_pkm_id_file_pkm_foreign');
			$table->string('proposal1')->nullable();
			$table->string('proposal2')->nullable();
			$table->string('proposal3')->nullable();
			$table->string('proposal4')->nullable();
			$table->string('proposal5')->nullable();
			$table->string('proposal6')->nullable();
			$table->string('proposal7')->nullable();
			$table->string('proposal8')->nullable();
			$table->string('proposal9')->nullable();
			$table->string('proposal10')->nullable();
			$table->text('note_proposal')->nullable();
			$table->string('perekap_proposal')->nullable();
			$table->string('penilai_proposal')->nullable();
			$table->string('time_proposal')->nullable();
			$table->string('wawancara1')->nullable();
			$table->string('wawancara2')->nullable();
			$table->string('wawancara3')->nullable();
			$table->string('wawancara4')->nullable();
			$table->string('wawancara5')->nullable();
			$table->string('wawancara6')->nullable();
			$table->string('wawancara7')->nullable();
			$table->string('wawancara8')->nullable();
			$table->string('wawancara9')->nullable();
			$table->string('wawancara10')->nullable();
			$table->text('note_wawancara', 65535)->nullable();
			$table->string('perekap_wawancara')->nullable();
			$table->string('penilai_wawancara')->nullable();
			$table->string('time_wawancara')->nullable();
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
		Schema::drop('nilai_pkm');
	}

}
