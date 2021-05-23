<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobAlertsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_alerts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 500)->nullable();
			$table->integer('user_id')->nullable();
			$table->string('email', 500)->nullable();
			$table->text('search_title')->nullable();
			$table->string('country_id', 500)->nullable();
			$table->integer('state_id')->nullable();
			$table->integer('city_id')->nullable();
			$table->integer('functional_area_id')->nullable();
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
		Schema::drop('job_alerts');
	}

}
