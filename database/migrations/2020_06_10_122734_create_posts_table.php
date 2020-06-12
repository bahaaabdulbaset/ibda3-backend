<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title')->default(0);
			$table->mediumText('content')->default(0);
			$table->string('image')->default(0);;
			$table->integer('views')->default(0);
			$table->string('slug')->default(0);
			$table->string('user_id')->default(0);
		});
	}

	public function down()
	{
		Schema::drop('posts');
	}
}
