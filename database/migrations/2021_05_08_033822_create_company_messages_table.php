<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_messages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('company_id')->nullable();
			$table->integer('seeker_id')->nullable();
			$table->text('message')->nullable();
			$table->enum('status', array('viewed','unviewed'))->default('unviewed');
			$table->enum('type', array('message','reply'))->nullable()->default('message');
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
		Schema::drop('company_messages');
	}

}
