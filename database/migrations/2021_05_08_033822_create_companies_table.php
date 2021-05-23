<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 155)->nullable();
			$table->string('email', 100)->nullable();
			$table->string('ceo', 60)->nullable();
			$table->integer('industry_id')->nullable()->default(0);
			$table->integer('ownership_type_id')->nullable()->default(0);
			$table->text('description')->nullable();
			$table->string('location', 155)->nullable();
			$table->integer('no_of_offices')->nullable();
			$table->string('website', 155)->nullable();
			$table->string('no_of_employees', 15)->nullable();
			$table->string('established_in', 12)->nullable();
			$table->string('fax', 30)->nullable();
			$table->string('phone', 30)->nullable();
			$table->string('logo', 155)->nullable();
			$table->integer('country_id')->nullable()->default(0);
			$table->integer('state_id')->nullable()->default(0);
			$table->integer('city_id')->nullable()->default(0);
			$table->string('slug', 155)->nullable();
			$table->boolean('is_active')->nullable()->default(1);
			$table->boolean('is_featured')->nullable()->default(0);
			$table->boolean('verified')->nullable()->default(0);
			$table->string('verification_token')->nullable();
			$table->string('password', 100)->nullable();
			$table->string('remember_token', 100)->nullable();
			$table->text('map')->nullable();
			$table->timestamps(10);
			$table->string('facebook', 250)->nullable();
			$table->string('twitter', 250)->nullable();
			$table->string('linkedin', 250)->nullable();
			$table->string('google_plus', 250)->nullable();
			$table->string('pinterest', 250)->nullable();
			$table->integer('package_id')->nullable()->default(0);
			$table->dateTime('package_start_date')->nullable();
			$table->dateTime('package_end_date')->nullable();
			$table->integer('jobs_quota')->nullable()->default(0);
			$table->integer('availed_jobs_quota')->nullable()->default(0);
			$table->boolean('is_subscribed')->nullable()->default(1);
			$table->integer('cvs_package_id')->nullable();
			$table->dateTime('cvs_package_start_date')->nullable();
			$table->dateTime('cvs_package_end_date')->nullable();
			$table->integer('cvs_quota')->nullable();
			$table->integer('availed_cvs_quota')->nullable();
			$table->text('availed_cvs_ids')->nullable();
			$table->dateTime('email_verified_at')->nullable();
			$table->string('payment_method')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('companies');
	}

}
