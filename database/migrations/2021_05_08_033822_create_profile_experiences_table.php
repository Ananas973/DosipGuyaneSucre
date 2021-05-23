<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileExperiencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profile_experiences', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable();
			$table->string('title', 100)->nullable();
			$table->string('company', 120)->nullable();
			$table->integer('country_id')->nullable();
			$table->integer('state_id')->nullable();
			$table->integer('city_id')->nullable();
			$table->dateTime('date_start')->nullable();
			$table->dateTime('date_end')->nullable();
			$table->boolean('is_currently_working')->nullable();
			$table->text('description')->nullable();
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
		Schema::drop('profile_experiences');
	}

}
