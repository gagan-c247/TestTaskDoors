<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_id')->references('id')->on('users');
            $table->foreignId('buyer_id')->references('id')->on('users');
            $table->integer('payment_id')->references('id')->on('payments');
            $table->double('price', 10, 3);
            $table->enum('status', ['1', '2','3','4','5'])
                    ->comment('1 is new | 2 is inProgress | 3 is ShippingInProgress | 4 is Shipped | 5 is Completed');
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
        Schema::dropIfExists('contracts');
    }
}
