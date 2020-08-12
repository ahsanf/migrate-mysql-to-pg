<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIdentitasMahasiswaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('identitas_mahasiswa', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('nim', 11);
			$table->string('nama', 50);
			$table->string('email');
			$table->text('alamat', 65535)->nullable();
			$table->enum('jenis_kelamin', array('L','P'))->nullable();
			$table->string('telepon', 15)->nullable();
			$table->string('backup_telepon')->nullable();
			$table->bigInteger('id_prodi')->unsigned()->index('identitas_mahasiswa_id_prodi_foreign');
			$table->string('tempatlahir')->nullable();
			$table->string('tanggallahir')->nullable();
			$table->string('pasfoto')->nullable();
			$table->enum('ukuranbaju', array('S','M','L','XL','XXL','XXXL','XXXXL'))->nullable();
			$table->string('scanktm')->nullable();
			$table->string('pass_simbel')->nullable();
			$table->enum('kelengkapan', array('Y','N'))->default('N');
			$table->text('crypt_token')->nullable();
			$table->string('id_user');
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
		Schema::drop('identitas_mahasiswa');
	}

}
