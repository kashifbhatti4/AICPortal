<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class add_foreign_keys_to_contact_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contact', function(Blueprint $table)
		{
			$table->foreign('users_id', 'contact_ibfk_1')->references('users_id')->on('user_info')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contact', function(Blueprint $table)
		{
			$table->dropForeign('contact_ibfk_1');
		});
	}

}
