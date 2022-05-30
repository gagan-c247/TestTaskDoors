<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurators', function (Blueprint $table) {
            $table->id();
            $table->string('series');
            $table->string('product_type');
            $table->string('door_opening_type');
            $table->string('opening_option');
            $table->string('standerd_size');
            $table->string('ratting');
            $table->string('core_material');
            $table->string('agency');
            $table->string('face_type');
            $table->string('cut');
            $table->string('grade');
            $table->string('hardware_type');
            $table->string('sub_category');
            $table->string('hinge_height');
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
        Schema::dropIfExists('configurators');
    }
}
