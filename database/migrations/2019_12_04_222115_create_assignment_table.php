<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class create_assignment_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assignment', function(Blueprint $table)
		{
			$table->integer('assignment_id', true);
			$table->string('assignment_name', 20);
			$table->integer('classes_id')->index('classes_id');
			$table->integer('total_points');
			$table->string('description', 50);
			$table->date('due_date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('assignment');
	}

}
