<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class add_foreign_keys_to_assignment_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('assignment', function(Blueprint $table)
		{
			$table->foreign('classes_id', 'assignment_ibfk_1')->references('classes_id')->on('classes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('assignment', function(Blueprint $table)
		{
			$table->dropForeign('assignment_ibfk_1');
		});
	}

}
