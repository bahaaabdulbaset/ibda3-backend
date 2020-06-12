<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	public function up()
	{
		Schema::create('projects', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->mediumText('content');
			$table->string('image');
			$table->string('cover_image');
			$table->string('slug');
			$table->integer('user_id');
		});
	}

	public function down()
	{
		Schema::drop('projects');
	}
}