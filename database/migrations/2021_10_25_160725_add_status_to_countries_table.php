<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->enum('status',['0','1'])->comment('stripe available A->1 NA->0')->default('0')->after('code');
            $table->string('currency_name')->nullable()->after('status');
            $table->string('currency')->nullable()->after('currency_name');
            $table->string('currency_code')->nullable()->after('currency');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('currency_name');
            $table->dropColumn('currency');
            $table->dropColumn('currency_code');
        });
    }
}
