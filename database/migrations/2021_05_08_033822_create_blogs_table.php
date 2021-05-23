<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blogs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('heading');
			$table->string('slug');
			$table->string('cate_id', 500);
			$table->text('content');
			$table->string('image')->nullable();
			$table->enum('featured', array('1','0'))->nullable()->default('0');
			$table->string('meta_title')->nullable();
			$table->string('lang')->nullable();
			$table->string('meta_keywords')->nullable();
			$table->string('meta_descriptions')->nullable();
			$table->string('remember_token', 100)->nullable();
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
		Schema::drop('blogs');
	}

}
