<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class add_foreign_keys_to_enroll_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('enroll', function(Blueprint $table)
		{
			$table->foreign('users_id', 'enroll_ibfk_1')->references('users_id')->on('user_info')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('program_id', 'enroll_ibfk_2')->references('program_id')->on('program')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('enroll', function(Blueprint $table)
		{
			$table->dropForeign('enroll_ibfk_1');
			$table->dropForeign('enroll_ibfk_2');
		});
	}

}
