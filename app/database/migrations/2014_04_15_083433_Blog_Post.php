<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BlogPost extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::drop('blog_post');
        Schema::create("blog_post", function($table){
            $table->increments("post_id");
            $table->integer('user_id');
            $table->foreign('user_id')->reference('id')->on('users');
            $table->string('title');
            $table->string('image_url');
            $table->boolean('is_private')->default(0);
            $table->datetime('post_date');
            $table->string('content');
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
	    Schema::table('blog_post', function($table){

        });
	}

}
