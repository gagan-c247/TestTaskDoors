<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLookUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('look_up', function (Blueprint $table) {
            $table->id();
            $table->string('resin_type')->nullable();
            $table->string('filler_type')->nullable();
            $table->string('filler_percentage')->nullable();
            $table->string('color')->nullable();
            $table->string('character_a')->nullable();
            $table->string('character_b')->nullable();
            $table->string('character_c')->nullable();
            $table->string('brand')->nullable();
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
        Schema::dropIfExists('look_up');
    }
}
