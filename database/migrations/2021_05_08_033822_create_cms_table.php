<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cms', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('page_slug', 250)->nullable();
			$table->boolean('show_in_top_menu')->nullable()->default(0);
			$table->boolean('show_in_footer_menu')->nullable()->default(0);
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
		Schema::drop('cms');
	}

}
