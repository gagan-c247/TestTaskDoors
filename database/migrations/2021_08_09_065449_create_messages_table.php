<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_id')->references('id')->on('users');
            $table->foreignId('reciver_id')->references('id')->on('users');
            $table->foreignId('product_id')->references('id')->on('products');
            // $table->string('message')->references('id')->on('users');
            $table->text('message')->nullable();
            $table->enum('type', ['0','1','2'])->comment('Text,image,emoji');
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
        Schema::dropIfExists('messages');
    }
}
