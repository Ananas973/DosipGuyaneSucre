<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsContentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cms_content', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('page_id')->nullable();
			$table->text('page_title')->nullable();
			$table->text('page_content')->nullable();
			$table->timestamps(10);
			$table->string('lang', 10)->nullable()->default('en');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cms_content');
	}

}
