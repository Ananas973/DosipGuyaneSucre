<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('packages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('package_title', 150)->nullable();
			$table->float('package_price', 7)->nullable()->default(0.00);
			$table->integer('package_num_days')->nullable()->default(0);
			$table->integer('package_num_listings')->nullable()->default(0);
			$table->enum('package_for', array('job_seeker','employer','cv_search'))->nullable()->default('job_seeker');
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
		Schema::drop('packages');
	}

}
