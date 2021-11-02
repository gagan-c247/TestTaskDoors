<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBankColumnsToBankAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bank_account', function (Blueprint $table) {
            $table->string('routing_number')->nullable();
            $table->date('dob')->nullable();
            $table->string('ssn_number')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('file_path')->comment('id proof document')->nullable();
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
            $table->dropColumn('routing_number');
            $table->dropColumn('dob');
            $table->dropColumn('ssn_number');
            $table->dropColumn('mobile_number');
            $table->dropColumn('file_path');
        });
    }
}
