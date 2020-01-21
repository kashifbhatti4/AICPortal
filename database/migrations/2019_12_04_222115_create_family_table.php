<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class create_family_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('family', function(Blueprint $table)
		{
			$table->integer('family_id', true);
			$table->string('address', 50);
			$table->string('city', 20);
			$table->string('home_state', 20);
			$table->integer('zip_code');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('family');
	}

}
