<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class create_teaches_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teaches', function(Blueprint $table)
		{
			$table->integer('users_id')->index('users_id');
			$table->integer('classes_id')->index('classes_id');
			$table->primary(['users_id','classes_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('teaches');
	}

}
