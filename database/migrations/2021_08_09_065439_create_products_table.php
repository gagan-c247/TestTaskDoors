<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->nullable()->onDelete('cascade');
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->string('sku');
            $table->integer('quantity');
            $table->double('price', 10, 3);
            $table->enum('status', ['0', '1']);
            $table->string('resin_type');
            $table->string('filler_type');
            $table->string('filler_percentage');
            $table->string('color');
            $table->string('character_a');
            $table->string('character_b');
            $table->string('character_c');
            $table->string('brand');
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
        Schema::dropIfExists('products');
    }
}
