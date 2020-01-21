<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class create_time_sheet_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('time_sheet', function(Blueprint $table)
		{
			$table->integer('users_id');
			$table->float('hourly_rate', 10, 0);
			$table->date('dates');
			$table->integer('total_hours')->default(0);
			$table->date('paid_on');
			$table->primary(['users_id','dates','total_hours']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('time_sheet');
	}

}
