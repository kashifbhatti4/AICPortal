<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class add_foreign_keys_to_teaches_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('teaches', function(Blueprint $table)
		{
			$table->foreign('users_id', 'teaches_ibfk_1')->references('users_id')->on('teacher_info')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('classes_id', 'teaches_ibfk_2')->references('classes_id')->on('classes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('teaches', function(Blueprint $table)
		{
			$table->dropForeign('teaches_ibfk_1');
			$table->dropForeign('teaches_ibfk_2');
		});
	}

}
