<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayuTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payu_transactions', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('paid_for_id')->unsigned()->nullable();
			$table->string('paid_for_type')->nullable();
			$table->string('transaction_id');
			$table->text('gateway');
			$table->text('body');
			$table->string('destination');
			$table->text('hash');
			$table->text('response')->nullable();
			$table->enum('status', array('pending','failed','successful','invalid'))->default('pending');
			$table->dateTime('verified_at')->nullable();
			$table->softDeletes();
			$table->timestamps(10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('payu_transactions');
	}

}
