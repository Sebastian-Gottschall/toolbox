<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('content', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('content_group_id');
			$table->boolean('antiquated')->default(0);
			$table->integer('user_id');
			$table->integer('priority')->default(0);
			$table->integer('favourite')->default(0);
			$table->string('title');
			$table->string('link')->nullable();
			$table->string('short_description');
			$table->longText('description')->nullable();
			$table->longText('content');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('content');
	}

}
