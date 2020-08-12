<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('username');
			$table->dateTime('email_verified_at')->nullable();
			$table->string('password');
			$table->enum('level', array('SuperAdmin','Operator','Mahasiswa','Perekap','Dosen','Kemahasiswaan','Reviewer'));
			$table->enum('block_akun', array('Y','N'))->default('N');
			$table->string('remember_token', 100)->nullable();
			$table->string('api_token', 100)->nullable()->unique('api_token');
			$table->string('sso_check', 10)->nullable();
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
		Schema::drop('users');
	}

}
