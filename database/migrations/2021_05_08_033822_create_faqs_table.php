<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faqs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('faq_question')->nullable();
			$table->text('faq_answer')->nullable();
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
		Schema::drop('faqs');
	}

}
