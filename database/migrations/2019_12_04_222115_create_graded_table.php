<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class create_graded_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('graded', function(Blueprint $table)
		{
			$table->integer('users_id')->index('users_id');
			$table->integer('assignment_id')->index('assignment_id');
			$table->string('grade', 3)->default('TBD');
			$table->primary(['users_id','assignment_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('graded');
	}

}
