<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAccountDetailsToBankAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bank_account', function (Blueprint $table) {
            $table->string('bank_name')->nullable();
            $table->string('account_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bank_account', function (Blueprint $table) {
            $table->dropColumn('bank_name');
            $table->dropColumn('account_number');
        });
    }
}
