<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class create_user_info_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_info', function(Blueprint $table)
		{
			$table->integer('users_id', true);
			$table->integer('family_id')->index('family_id');
			$table->string('name', 50);
			$table->string('gender', 10);
			$table->date('dob');
			$table->string('email', 30)->nullable();
			$table->string('secondary_email', 30)->nullable();
			$table->bigInteger('primary_phone')->nullable();
			$table->bigInteger('secondary_phone')->nullable();
			$table->string('is_parent', 10);
			$table->string('allergies', 50)->nullable();
			$table->boolean('is_photo');
			$table->string('emer_name', 50)->nullable();
			$table->bigInteger('emer_phone')->nullable();
			$table->string('emer_relation', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_info');
	}

}
