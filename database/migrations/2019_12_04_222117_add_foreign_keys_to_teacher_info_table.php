<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class add_foreign_keys_to_teacher_info_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('teacher_info', function(Blueprint $table)
		{
			$table->foreign('users_id', 'teacher_info_ibfk_1')->references('users_id')->on('user_info')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('teacher_info', function(Blueprint $table)
		{
			$table->dropForeign('teacher_info_ibfk_1');
		});
	}

}
