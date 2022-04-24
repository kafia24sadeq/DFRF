<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('content');
            $table->string('source', 100)->nullable();
            $table->string('tags', 100)->nullable();
            $table->integer('count')->nullable();
            $table->string('image_name');
            $table->string('caption')->nullable();
            $table->tinyInteger('status');
            $table->tinyInteger('type')->nullable();
            $table->integer('category_id');
            $table->tinyInteger('importance');
            $table->tinyInteger('comments_status')->nullable();
            $table->tinyInteger('user_id');
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
        Schema::drop('posts');
    }
}
