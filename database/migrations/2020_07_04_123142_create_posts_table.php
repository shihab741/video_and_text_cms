<?php

use Illuminate\Support\Facades\Schema;
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
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('video_id')->nullable();
            $table->text('excerpt');
            $table->text('body')->nullable();
            $table->string('image')->nullable();
            $table->integer('section'); // 1 means post for section one and 2 means post for section two
            $table->integer('type'); // 0 means video post and 1 means text post
            $table->integer('status'); // 0 means not published and 1 means published
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
        Schema::dropIfExists('posts');
    }
}
