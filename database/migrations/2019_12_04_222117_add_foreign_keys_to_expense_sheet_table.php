<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class add_foreign_keys_to_expense_sheet_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('expense_sheet', function(Blueprint $table)
		{
			$table->foreign('program_id', 'expense_sheet_ibfk_1')->references('program_id')->on('program')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('expense_sheet', function(Blueprint $table)
		{
			$table->dropForeign('expense_sheet_ibfk_1');
		});
	}

}
