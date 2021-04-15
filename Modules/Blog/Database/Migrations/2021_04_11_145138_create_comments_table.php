<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->unsignedBigInteger('post_id');
            $table->id();
            $table->bigInteger('comment_id')->default(-1);
            $table->integer('user_id');
            $table->text('content');
            $table->integer('like')->default(0);
            $table->integer('dislike')->default(0);
            $table->timestamps();

            $table->foreign('post_id')->references('id')->on('posts')
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
        Schema::dropIfExists('comments');
    }
}
