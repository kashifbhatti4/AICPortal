<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class add_foreign_keys_to_graded_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('graded', function(Blueprint $table)
		{
			$table->foreign('users_id', 'graded_ibfk_1')->references('users_id')->on('user_info')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('assignment_id', 'graded_ibfk_2')->references('assignment_id')->on('assignment')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('graded', function(Blueprint $table)
		{
			$table->dropForeign('graded_ibfk_1');
			$table->dropForeign('graded_ibfk_2');
		});
	}

}
