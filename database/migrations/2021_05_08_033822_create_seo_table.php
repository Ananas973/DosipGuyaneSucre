<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seo', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('page_title')->nullable();
			$table->text('seo_title')->nullable();
			$table->text('seo_description')->nullable();
			$table->text('seo_keywords')->nullable();
			$table->text('seo_other')->nullable();
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
		Schema::drop('seo');
	}

}
