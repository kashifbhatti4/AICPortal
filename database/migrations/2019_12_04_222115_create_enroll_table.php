<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class create_enroll_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enroll', function(Blueprint $table)
		{
			$table->integer('users_id')->index('users_id');
			$table->integer('program_id')->index('program_id');
			$table->primary(['users_id','program_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enroll');
	}

}
