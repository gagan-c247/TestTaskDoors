<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFilenameToMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            // $table->string('filepath')->nullable();
            $table->string('filetype')->nullable();
            $table->enum('read_status',['0','1'])->default('0');
            $table->string('chat_id')->nullable()->comment('sender_id_product_id_reciver_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->dropColumn('filepath');
            $table->dropColumn('filetype');
            $table->dropColumn('read_status');
            $table->dropColumn('chat_id');
        });
    }
}
