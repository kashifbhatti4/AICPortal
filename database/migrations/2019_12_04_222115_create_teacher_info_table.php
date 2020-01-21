<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class create_teacher_info_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teacher_info', function(Blueprint $table)
		{
			$table->integer('users_id')->primary();
			$table->date('start_date');
			$table->string('volunteer', 10);
			$table->string('role', 20);
			$table->string('status', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('teacher_info');
	}

}
