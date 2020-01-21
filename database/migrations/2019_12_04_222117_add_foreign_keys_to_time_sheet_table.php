<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class add_foreign_keys_to_time_sheet_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('time_sheet', function(Blueprint $table)
		{
			$table->foreign('users_id', 'time_sheet_ibfk_1')->references('users_id')->on('teacher_info')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('time_sheet', function(Blueprint $table)
		{
			$table->dropForeign('time_sheet_ibfk_1');
		});
	}

}
