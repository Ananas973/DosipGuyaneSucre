<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contact_messages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('full_name', 100)->nullable();
			$table->string('email', 100)->nullable();
			$table->string('phone', 20)->nullable();
			$table->text('message_txt')->nullable();
			$table->string('subject', 200)->nullable();
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
		Schema::drop('contact_messages');
	}

}
