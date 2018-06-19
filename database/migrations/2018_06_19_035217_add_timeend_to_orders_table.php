<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimeendToOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->date('transaction_completion')->default(null)->comment("Thoi gian hoan thanh giao dich");
            $table->boolean('status_transaction')->default(0)->comment("Trang thai giao dich");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('transaction_completion');
            $table->dropColumn('status_transaction');
        });
    }
}
