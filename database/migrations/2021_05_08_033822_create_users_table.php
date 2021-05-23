<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('first_name', 100)->nullable();
			$table->string('middle_name', 100)->nullable();
			$table->string('last_name', 100)->nullable();
			$table->string('name', 250)->nullable();
			$table->string('email', 100)->nullable()->unique();
			$table->string('father_name', 100)->nullable();
			$table->date('date_of_birth')->nullable();
			$table->integer('gender_id')->nullable();
			$table->integer('marital_status_id')->nullable();
			$table->integer('nationality_id')->nullable();
			$table->string('national_id_card_number', 100)->nullable();
			$table->string('country_id', 50)->nullable();
			$table->string('state_id', 50)->nullable();
			$table->string('city_id', 50)->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('mobile_num', 25)->nullable();
			$table->integer('job_experience_id')->nullable();
			$table->integer('career_level_id')->nullable();
			$table->integer('industry_id')->nullable();
			$table->integer('functional_area_id')->nullable();
			$table->string('current_salary', 100)->nullable();
			$table->string('expected_salary', 100)->nullable();
			$table->string('salary_currency', 10)->nullable();
			$table->text('street_address')->nullable();
			$table->integer('is_active')->nullable()->default(0);
			$table->boolean('verified')->default(0);
			$table->string('verification_token')->nullable();
			$table->string('provider', 35)->nullable();
			$table->string('provider_id')->nullable();
			$table->string('password', 100)->nullable();
			$table->string('remember_token', 100)->nullable();
			$table->string('image', 100)->nullable();
			$table->string('cover_image', 100)->nullable();
			$table->string('lang', 10)->nullable();
			$table->timestamps(10);
			$table->boolean('is_immediate_available')->nullable()->default(1);
			$table->integer('num_profile_views')->nullable()->default(0);
			$table->integer('package_id')->nullable()->default(0);
			$table->dateTime('package_start_date')->nullable();
			$table->dateTime('package_end_date')->nullable();
			$table->integer('jobs_quota')->nullable()->default(0);
			$table->integer('availed_jobs_quota')->nullable()->default(0);
			$table->text('search')->nullable()->index('full_search');
			$table->boolean('is_subscribed')->nullable()->default(1);
			$table->text('video_link')->nullable();
			$table->dateTime('email_verified_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
