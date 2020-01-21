<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class create_expense_sheet_table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('expense_sheet', function(Blueprint $table)
		{
			$table->integer('expense_id')->primary();
			$table->integer('program_id')->index('program_id');
			$table->string('item', 20);
			$table->string('description', 100);
			$table->string('merchant', 20);
			$table->float('expense', 10, 0);
			$table->string('payment_type', 10);
			$table->string('status', 10);
			$table->date('dates');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('expense_sheet');
	}

}
