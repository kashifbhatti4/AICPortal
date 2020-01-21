<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class add_foreign_keys_to_user_info_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_info', function(Blueprint $table)
		{
			$table->foreign('family_id', 'user_info_ibfk_1')->references('family_id')->on('family')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_info', function(Blueprint $table)
		{
			$table->dropForeign('user_info_ibfk_1');
		});
	}

}
