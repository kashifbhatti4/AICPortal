<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class create_program_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('program', function(Blueprint $table)
		{
			$table->integer('program_id', true);
			$table->string('program_name', 20);
			$table->string('description', 100);
			$table->date('start_date');
			$table->date('end_date');
			$table->float('fees', 10, 0);
			$table->integer('age_lower');
			$table->integer('age_upper');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('program');
	}

}
