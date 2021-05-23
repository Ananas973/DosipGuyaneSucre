<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryPeriodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('salary_periods', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('salary_period_id')->nullable()->default(0);
			$table->string('salary_period', 200)->nullable();
			$table->boolean('is_default')->nullable()->default(0);
			$table->boolean('is_active')->nullable();
			$table->integer('sort_order')->nullable()->default(99999);
			$table->string('lang', 10)->nullable()->default('en');
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
		Schema::drop('salary_periods');
	}

}
