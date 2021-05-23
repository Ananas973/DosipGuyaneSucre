<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applicant_messages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable();
			$table->string('user_name', 150)->nullable();
			$table->integer('from_id')->nullable();
			$table->integer('to_id')->nullable();
			$table->string('to_email', 100)->nullable();
			$table->string('to_name', 100)->nullable();
			$table->string('from_name', 100)->nullable();
			$table->string('from_email', 100)->nullable();
			$table->string('from_phone', 20)->nullable();
			$table->text('message_txt')->nullable();
			$table->string('subject', 200)->nullable();
			$table->boolean('is_read')->nullable()->default(0);
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
		Schema::drop('applicant_messages');
	}

}
