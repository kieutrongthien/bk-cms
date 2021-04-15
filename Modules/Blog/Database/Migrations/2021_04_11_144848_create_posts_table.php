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
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->string('slug')->unique();
            $table->text('title');
            $table->longText('content');
            $table->enum('is_publish', [0, 1]);
            $table->enum('is_featured', [0, 1]);
            $table->integer('views')->default(0);
            $table->integer('like')->default(0);
            $table->integer('dislike')->default(0);
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
