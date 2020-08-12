<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserDiktiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_dikti', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('id_file_pkm')->unsigned()->index('user_dikti_id_file_pkm_foreign');
			$table->bigInteger('dana_dikti')->nullable();
			$table->string('poster')->nullable();
			$table->string('file_ppt')->nullable();
			$table->string('file_artikel')->nullable();
			$table->text('desc_artikel')->nullable();
			$table->integer('acc_artikel')->nullable();
			$table->text('thumbnail_pkm')->nullable();
			$table->string('poster_mentah', 100)->nullable();
			$table->string('file_haki', 100)->nullable();
			$table->integer('dana_acc')->nullable();
			$table->string('status_dikti')->nullable();
			$table->string('bukti_upload', 10)->nullable();
			$table->integer('perubahan')->default(1)->comment('1 = default, 2 = berubah, 3 = acc, 4 = ditolak');
			$table->text('alasan_perubahan')->nullable();
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
		Schema::drop('user_dikti');
	}

}
