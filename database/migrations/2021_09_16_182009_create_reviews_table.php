<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('contract_id')->nullable();
            $table->string('review')->nullable();
            $table->string('rating')->nullable();
            $table->enum('status',['0','1'])->default('0')->comment('1->active,0->deactivate');
            $table->foreign('user_id')->references('id')->on('users')->ondelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->ondelete('cascade');
            $table->foreign('contract_id')->references('id')->on('contracts')->ondelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
