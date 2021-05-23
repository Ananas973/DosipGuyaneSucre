<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('testimonials', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('testimonial_id')->nullable()->default(0);
			$table->string('testimonial_by', 100)->nullable();
			$table->string('testimonial', 600)->nullable();
			$table->string('company', 150)->nullable();
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
		Schema::drop('testimonials');
	}

}
